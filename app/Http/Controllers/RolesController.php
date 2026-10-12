<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RolesController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'role' => ['required', 'in:owner,tenant'],
        ]);

        $user = Auth::user();

        // إذا كان المستخدم اختار الدور من قبل
        if ($user->role !== 'pending') {
            return $this->redirectToDashboard($user->role);
        }

        // حفظ الدور في قاعدة البيانات
        $user->role = $request->role;
        $user->save();

        // التوجيه مباشرة للصفحة المناسبة
        return $this->redirectToDashboard($user->role);
    }

    private function redirectToDashboard(string $role)
    {
        if ($role === 'owner') {
            return redirect()->route('owner.dashboard');
        }

        if ($role === 'tenant') {
            return redirect()->route('tenant.dashboard');
        }

        return redirect()->route('roleuser');
    }
}
