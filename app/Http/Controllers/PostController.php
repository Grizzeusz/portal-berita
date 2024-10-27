<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string',
    ]);

    // Membuat slug dari title dan menghandle duplikasi
    $slug = Str::slug($request->title);
    $existingSlugCount = Post::where('slug', 'LIKE', "{$slug}%")->count();
    $slug = $existingSlugCount ? "{$slug}-{$existingSlugCount}" : $slug;

    // Menyimpan data ke database dengan create
    Post::create([
        'title' => $request->title,
        'slug' => $slug,
        'body' => $request->body,
    ]);

    return back()->with('success', 'Post berhasil disimpan!');
    }


    public function update(Request $request, $slug)
{
    // Validasi input
    $request->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string',
    ]);

    // Cari post berdasarkan slug lama
    $post = Post::where('slug', $slug)->firstOrFail();

    // Perbarui title dan body
    $post->title = $request->title;
    $post->body = $request->body;

    // Buat slug baru berdasarkan title yang diupdate
    $newSlug = Str::slug($request->title);

    // Menghandle duplikasi slug jika ada
    $originalSlug = $newSlug;
    $count = 1;
    while (Post::where('slug', $newSlug)->where('id', '!=', $post->id)->exists()) {
        $newSlug = "{$originalSlug}-{$count}";
        $count++;
    }

    $post->slug = $newSlug;
    $post->save();

    // Redirect ke halaman edit dengan slug baru
    return redirect()->route('post.edit', ['slug' => $newSlug])
        ->with('success', 'Post berhasil diperbarui!');
}
public function destroy($slug)
{
    // Cari post berdasarkan slug
    $post = Post::where('slug', $slug)->firstOrFail();

    // Hapus post
    $post->delete();

    // Redirect dengan pesan sukses
    return back()->with('success', 'Post berhasil dihapus!');
}
}
