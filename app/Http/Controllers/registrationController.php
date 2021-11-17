<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateregistrationRequest;
use App\Http\Requests\UpdateregistrationRequest;
use App\Repositories\registrationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class registrationController extends AppBaseController
{
    /** @var  registrationRepository */
    private $registrationRepository;

    public function __construct(registrationRepository $registrationRepo)
    {
        $this->registrationRepository = $registrationRepo;
    }

    /**
     * Display a listing of the registration.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $registrations = $this->registrationRepository->all();

        return view('registrations.index')
            ->with('registrations', $registrations);
    }

    /**
     * Show the form for creating a new registration.
     *
     * @return Response
     */
    public function create()
    {
        return view('registrations.create');
    }

    /**
     * Store a newly created registration in storage.
     *
     * @param CreateregistrationRequest $request
     *
     * @return Response
     */
    public function store(CreateregistrationRequest $request)
    {
        $input = $request->all();

        $registration = $this->registrationRepository->create($input);

        Flash::success('Registration saved successfully.');

        return redirect(route('registrations.index'));
    }

    /**
     * Display the specified registration.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $registration = $this->registrationRepository->find($id);

        if (empty($registration)) {
            Flash::error('Registration not found');

            return redirect(route('registrations.index'));
        }

        return view('registrations.show')->with('registration', $registration);
    }

    /**
     * Show the form for editing the specified registration.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $registration = $this->registrationRepository->find($id);

        if (empty($registration)) {
            Flash::error('Registration not found');

            return redirect(route('registrations.index'));
        }

        return view('registrations.edit')->with('registration', $registration);
    }

    /**
     * Update the specified registration in storage.
     *
     * @param int $id
     * @param UpdateregistrationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateregistrationRequest $request)
    {
        $registration = $this->registrationRepository->find($id);

        if (empty($registration)) {
            Flash::error('Registration not found');

            return redirect(route('registrations.index'));
        }

        $registration = $this->registrationRepository->update($request->all(), $id);

        Flash::success('Registration updated successfully.');

        return redirect(route('registrations.index'));
    }

    /**
     * Remove the specified registration from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $registration = $this->registrationRepository->find($id);

        if (empty($registration)) {
            Flash::error('Registration not found');

            return redirect(route('registrations.index'));
        }

        $this->registrationRepository->delete($id);

        Flash::success('Registration deleted successfully.');

        return redirect(route('registrations.index'));
    }
}
