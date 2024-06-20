<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\dekka1462200067;
use Illuminate\Support\Facades\DB;


class dekka1462200067Controller extends Controller
{
    public function adminIndex(Request $request) {
        $query = dekka1462200067::query();
    
        if($request->has('search')) {
            $search = $request->search;
            $query->where('nama', 'LIKE', "%$search%")
                  ->orWhere('gender', 'LIKE', "%$search%")
                  ->orWhere('umur', 'LIKE', "%$search%");
        }
    
        $allData = $query->paginate(5);
    
        return view('index', ['data' => $allData]);
    }
    

    public function adminAdd() {
        $allData = dekka1462200067::all();
        return view('add', ['data'=>$allData]);
    }

    public function adminEdit($id) {
        $dataEdit = dekka1462200067::find($id);
        return view('edit', ['data'=>$dataEdit]);
    }


    public function AddAdmin(Request $request) {
        $newData = new dekka1462200067();
        $newData->nama = $request->nama;
        $newData->gender = $request->gender;
        $newData->umur = $request->umur;
        $newData->save();
        $this->resetIds();
        return redirect('/adminIndex');
    }


    public function EditAdmin(Request $request) {
        dekka1462200067::where('id', $request->id)->update([
            'nama'=>$request->nama,
            'gender'=>$request->gender,
            'umur'=>$request->umur,
        ]);
        return redirect('/adminIndex');
    }

    // delete data
    public function DeleteAdmin($id) {
        $dataDelete = dekka1462200067::find($id);
        if ($dataDelete) {
            $dataDelete->delete();
            $this->resetIds();
        }
        return redirect('/adminIndex');
    }

    private function resetIds() {
        $data = dekka1462200067::all();
        $count = 1;
        foreach ($data as $item) {
            $item->id = $count;
            $item->save();
            $count++;
        }
        $maxId = dekka1462200067::max('id') + 1;
        DB::statement("ALTER TABLE dekka1462200067s AUTO_INCREMENT = $maxId");
    }
}
