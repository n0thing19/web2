<?php
use App\Models\User;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function() {
    
    $this->admin = User::factory()->create(['role' => 'admin']);
});

test('guest cannot access category management', function() {
    
    $this->get(route('admin.category.index'))->assertRedirect('/login');
    $this->get(route('admin.category.create'))->assertRedirect('/login');
});

test('admin can view category list page', function() {
    $category = Category::create(['name' => 'Fiksi']);
    $this->actingAs($this->admin)
         ->get(route('admin.category.index'))
         ->assertOk()
         ->assertSeeText('Manajemen Kategori')
         ->assertSeeText('Fiksi');
});

test('admin can view create category page', function() {
    $this->actingAs($this->admin)
        ->get(route('admin.category.create'))
        ->assertOk();
});

test('admin can create a new category', function() {
    $this->actingAs($this->admin)
        ->post(route('admin.category.store'), [
            'name' => 'Pendidikan',
        ])
        ->assertRedirect(route('admin.category.index')); 
    
    $this->assertDatabaseHas('categories', [
        'name' => 'Pendidikan'
    ]);
});

test('validation fails if name is empty when creating category', function() {
    $this->actingAs($this->admin)
        ->post(route('admin.category.store'), [
            'name' => '', 
        ])
        ->assertSessionHasErrors('name'); 
});




test('admin can view edit category page', function() {
    $category = Category::create(['name' => 'Kategori Untuk Diedit']);

    $this->actingAs($this->admin)
        ->get(route('admin.category.edit', $category))
        ->assertOk()
        ->assertSeeText('Edit Category')
        ->assertSee($category->name); 
});

test('admin can update a category', function() {
    $category = Category::create(['name' => 'Nama Lama']); 

    $this->actingAs($this->admin)
        ->put(route('admin.category.update', $category), [
            'name' => 'Sejarah Updated',
        ])
        ->assertRedirect(route('admin.category.index'));

    
    $this->assertDatabaseHas('categories', [
        'id' => $category->id,
        'name' => 'Sejarah Updated',
    ]);
});




test('admin can delete a category', function() {
    $category = Category::create(['name' => 'Akan Dihapus']); 

    
    $this->assertDatabaseCount('categories', 1);

    $this->actingAs($this->admin)
        ->delete(route('admin.category.destroy', $category))
        ->assertRedirect(route('admin.category.index'));

    
    $this->assertDatabaseMissing('categories', [
        'id' => $category->id,
    ]);
});