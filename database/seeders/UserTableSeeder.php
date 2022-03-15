<?php

namespace Database\Seeders;

use App\Models\ProgramStudi;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
        $permissions = [
            'create user',
            'show user',
            'update user',
            'delete user',
            'create form',
            'show form',
            'update form',
            'delete form',
            'download file',
            'upload file'
         ];

         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }

        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo('create user');
        $admin->givePermissionTo('show user');
        $admin->givePermissionTo('update user');
        $admin->givePermissionTo('delete user');
        
        $perwakilan = Role::create(['name' => 'perwakilan']);
        $perwakilan->givePermissionTo('create form');
        $perwakilan->givePermissionTo('show form');
        $perwakilan->givePermissionTo('update form');
        $perwakilan->givePermissionTo('delete form');
        $perwakilan->givePermissionTo('download file');
        $perwakilan->givePermissionTo('upload file');

        $dekan = Role::create(['name' => 'dekan']);
        $dekan->givePermissionTo('show form');
        $dekan->givePermissionTo('download file');
        $dekan->givePermissionTo('upload file');
        
        $asesor = Role::create(['name' => 'asesor']);
        $asesor->givePermissionTo('download file');
        $asesor->givePermissionTo('upload file');

        $user = User::create([
            'name' => 'Galih Saputra',
            'prodi_id' => 5,
            'role_id' => 1,
            'email' => 'gatra@admin.web.id',
            'password' => Hash::make('gatra090'),
        ]);
        $user->assignRole($admin);

        $user = User::create([
            'name' => 'Teknik Industri',
            'prodi_id' => 12,
            'role_id' => 2,
            'email' => 'teknik.industri@undip.ac.id',
            'password' => Hash::make('industri123'),
        ]);
        $user->assignRole($perwakilan);
        
        $user = User::create([
            'name' => 'Dekanat Fakultas Teknik',
            'role_id' => 3,
            'email' => 'dekan.tekni@undip.ac.id',
            'password' => Hash::make('dekan123'),
        ]);
        $user->assignRole($dekan);
        
        $user = User::create([
            'name' => 'Wakil Dekanat Fakultas Teknik',
            'role_id' => 3,
            'email' => 'wadek.teknik@undip.ac.id',
            'password' => Hash::make('wadek123'),
        ]);
        $user->assignRole($dekan);
        
        $user = User::create([
            'name' => 'Tim Penjaminan Mutu Fakultas Teknik',
            'role_id' => 3,
            'email' => 'tim.teknik@undip.ac.id',
            'password' => Hash::make('mutu123'),
        ]);
        $user->assignRole($dekan);

        User::create([
            'name' => 'Asesor',
            'email' => 'asesor@undip.ac.id',
            'role_id' => 4,
            'password' => Hash::make('asesor123'),
        ]);
        $user->assignRole($asesor);

        $user = User::create([
            'name' => 'Pasyah Vegananda',
            'role_id' => 1,
            'email' => 'pasyah@admin.web.id',
            'password' => Hash::make('pasyah069'),
        ]);
        $user->assignRole($admin);

        ProgramStudi::create([
            'name' => 'Teknik Sipil'
        ]);
        ProgramStudi::create([
            'name' => 'Teknik Geologi'
        ]);
        ProgramStudi::create([
            'name' => 'Teknik Arsitektur'
        ]);
        ProgramStudi::create([
            'name' => 'Teknik Perencanaan Wilayah dan Kota'
        ]);
        ProgramStudi::create([
            'name' => 'Teknik Komputer'
        ]);
        ProgramStudi::create([
            'name' => 'Teknik Kimia'
        ]);
        ProgramStudi::create([
            'name' => 'Teknik Geodesi'
        ]);
        ProgramStudi::create([
            'name' => 'Teknik Lingkungan'
        ]);
        ProgramStudi::create([
            'name' => 'Teknik Perkapalan'
        ]);
        ProgramStudi::create([
            'name' => 'Teknik Elektro'
        ]);
        ProgramStudi::create([
            'name' => 'Teknik Mesin'
        ]);
        ProgramStudi::create([
            'name' => 'Teknik Industi'
        ]);
    }
}
