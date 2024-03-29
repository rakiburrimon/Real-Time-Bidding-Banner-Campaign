<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class ModuleManagementController extends Controller
{
    public function index()
    {
        $moduleStatuses = [];
        $moduleStatuses = json_decode(File::get(base_path('modules_statuses.json')), true);
        $data['moduleStatuses'] = $moduleStatuses;

        return view('modules.index', $data);
    }

    public function toggle($moduleName)
    {
        $moduleStatuses = json_decode(File::get(base_path('modules_statuses.json')), true);

        if (array_key_exists($moduleName, $moduleStatuses)) {
            $moduleStatuses[$moduleName] = !$moduleStatuses[$moduleName];
            File::put(base_path('modules_statuses.json'), json_encode($moduleStatuses));
            return redirect()->route('modules.index')->with('success', 'Module status toggled successfully.');
        } else {
            return redirect()->route('modules.index')->with('error', 'Module not found.');
        }
    }
}
