<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index()
    {
        try {
            $categories = Category::withCount('products')->get();
            return view('admin.page.categories', compact('categories'));
        } catch (\Exception $e) {
            return redirect()->route('categories.index')->with('alert', [
                'type' => 'error',
                'title' => 'Kesalahan!',
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ]);
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
            ]);

            Category::create($request->only('name', 'description'));

            return redirect()->route('categories.index')->with('alert', [
                'type' => 'success',
                'title' => 'Berhasil!',
                'message' => 'Kategori berhasil ditambahkan.'
            ]);
        } catch (\Exception $e) {
            return redirect()->route('categories.index')->with('alert', [
                'type' => 'error',
                'title' => 'Kesalahan!',
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ]);
        }
    }

    public function update(Request $request, Category $category)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
            ]);

            $category->update($request->only('name', 'description'));

            return redirect()->route('categories.index')->with('alert', [
                'type' => 'success',
                'title' => 'Berhasil!',
                'message' => 'Kategori berhasil diperbarui.'
            ]);
        } catch (\Exception $e) {
            return redirect()->route('categories.index')->with('alert', [
                'type' => 'error',
                'title' => 'Kesalahan!',
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ]);
        }
    }

    public function destroy(Category $category)
    {
        try {
            $category->delete();

            return redirect()->route('categories.index')->with('alert', [
                'type' => 'success',
                'title' => 'Berhasil!',
                'message' => 'Kategori berhasil dihapus.'
            ]);
        } catch (\Exception $e) {
            return redirect()->route('categories.index')->with('alert', [
                'type' => 'error',
                'title' => 'Kesalahan!',
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ]);
        }
    }
}
