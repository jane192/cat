<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Account;
use App\Http\Requests\CreateAccountRequest;
use App\Http\Requests\UpdateAccountRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\User;


class AccountController extends Controller {

	/**
	 * Display a listing of account
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $account = Account::with("user")->get();

		return view('admin.account.index', compact('account'));
	}

	/**
	 * Show the form for creating a new account
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $user = User::pluck("email", "id")->prepend('Please select', 0);

	    
	    return view('admin.account.create', compact("user"));
	}

	/**
	 * Store a newly created account in storage.
	 *
     * @param CreateAccountRequest|Request $request
	 */
	public function store(CreateAccountRequest $request)
	{
	    $request = $this->saveFiles($request);
		Account::create($request->all());

		return redirect()->route(config('quickadmin.route').'.account.index');
	}

	/**
	 * Show the form for editing the specified account.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$account = Account::find($id);
	    $user = User::pluck("email", "id")->prepend('Please select', 0);

	    
		return view('admin.account.edit', compact('account', "user"));
	}

	/**
	 * Update the specified account in storage.
     * @param UpdateAccountRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateAccountRequest $request)
	{
		$account = Account::findOrFail($id);

        $request = $this->saveFiles($request);

		$account->update($request->all());

		return redirect()->route(config('quickadmin.route').'.account.index');
	}

	/**
	 * Remove the specified account from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Account::destroy($id);

		return redirect()->route(config('quickadmin.route').'.account.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Account::destroy($toDelete);
        } else {
            Account::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.account.index');
    }

}
