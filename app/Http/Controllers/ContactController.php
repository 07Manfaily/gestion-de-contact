<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $count=Contact::Count()->get();
        // return view('index',compact('count'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $getContacts = Contact::all();
        $v = "Aucun";
        return view('datatable',compact('getContacts','v'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pseudo' => 'required',
            'contact1' => 'required|min:10',
            'contact2' => 'nullable|min:10',

         ]);

        Contact::create([
             "Pseudo"  => $request->pseudo,
              "Contact" => $request->contact1,
              "Contact2" =>  $request->contact2,



         ]);
         $flash=$request->session()->flash('success','Enregistrement effectué avec succès');
         return back()->with($flash);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $contacts=Contact::findOrfail($id);
        return view('update', compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(Contact::where('id', $id)->exists())
        {
            $rules=[
                'pseudo' => 'required',
                'contact1' => 'required',
                'contact2' => '',

            ];

            $this->validate($request, $rules);

            Contact::where('id',$id)->update([
                "Pseudo"  => $request->pseudo,
                 "Contact" => $request->contact1,
                 "Contact2" =>  $request->contact2,



            ]);


             $flash=$request->session()->flash('success','Modification effectué avec succès');
             return back()->with($flash);
        }else{
            $flash=$request->session()->flash('success','Cet element est inexistant');
            return back()->with($flash);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id,Request $request)
    {
        $contact=Contact::findOrfail($id);
        $contact->delete();

        $flash=$request->session()->flash('success','Suppression effectué avec succès');
        return back()->with($flash);
    }
}
