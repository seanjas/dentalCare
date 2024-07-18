<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Medicine;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function addview(){
    $doctor = Doctor::all(); // Fetch all doctors from the database

    return view('admin.add_doctor' ,compact('doctor'));
   }

   public function addviewPatient(){
    $patient = Patient::all(); // Fetch all patients from the database
    return view('admin.add_patient',compact('patient'));
   }

   public function addviewAppointment(){
    $appointment = Appointment::all();

    return view('admin.appointment_table',compact('appointment',));
   }

   public function addviewMedicine(){
    $medicine = Medicine::all();
    return view('admin.medicine_table', compact('medicine'));
   }

   public function addviewReport(){
    $medicine = Medicine::all();
    $doctor = Doctor::all();
    $patient = Patient::all();
    return view('admin.generated_report', compact('medicine','doctor','patient'));
   }




//    view adding forms
// doctor form
   public function addForm(){
    return view('admin.form');
   }
// patient form
   public function addPatient(){
    return view('admin.patient_form');
   }
// medicine form
   public function addMedicine(){
    return view('admin.medicine_form');
   }

//    appointment form
   public function addAppointment(){
    $doctor = Doctor::all(); // Fetch all doctors from the database
    $patient = Patient::all();
    return view('admin.add_appointment',compact('doctor','patient'));
   }




//    Add Doctor Function
   public function upload_doctor(Request $request)
{
    // Create a new Doctor image
    $doctor = new Doctor;
    $image=$request->file;
    $imagename = time() . '.' . $image->getClientOriginalExtension();
    $request->file->move('doctorimage',$imagename);




    // Assign other fields from the request to the Doctor model
    $doctor->image = $imagename;
    $doctor->name = $request->name;
    $doctor->password = bcrypt($request->password);
    $doctor->email = $request->email;
    $doctor->phone = $request->phone;
    $doctor->confirm_password = bcrypt($request->confirm_password);


    // Save the Doctor model to the database
    $doctor->save();

    // Redirect back to the previous page
    return redirect('/add_doctor_view');
}


//    Add Patient Function
public function upload_patient(Request $request)
{
    // Create a new Doctor image
    $patient = new Patient;
    $image=$request->file;
    $imagename = time() . '.' . $image->getClientOriginalExtension();
    $request->file->move('patientimage',$imagename);




    // Assign other fields from the request to the patient model
    $patient->patient_image = $imagename;
    $patient->name = $request->name;
    $patient->password = bcrypt($request->password);
    $patient->email = $request->email;
    $patient->phone = $request->phone;
    $patient->confirm_password = bcrypt($request->confirm_password);


    // Save the patient model to the database
    $patient->save();

    // Redirect back to the previous page
    return redirect('/add_patient_view');

}

public function upload_appointment(Request $request)
    {
        // // Validate incoming request data
        // $request->validate([
        //     'service' => 'required',
        //     'date' => 'required|date',
        //     'time' => 'required',
        //     'doctor_id' => 'required|exists:doctors,id', // Ensure doctor_id exists in doctors table
        //     'patient_id' => 'required|exists:patients,id', // Ensure patient_id exists in patients table
        // ]);

        // // Find the Doctor and Patient based on their IDs
        // $doctor = Doctor::find($request->id);
        // $patient = Patient::find($request->id);

        // // Check if Doctor and Patient were found
        // if (!$doctor) {
        //     return redirect()->back()->with('error', 'Doctor not found.');
        // }

        // if (!$patient) {
        //     return redirect()->back()->with('error', 'Patient not found.');
        // }

        // // Create a new Appointment instance
        // $appointment = new Appointment;

        // // Assign values to appointment attributes
        // $appointment->doctor = $doctor->name; // Assuming 'name' is a column in the 'doctors' table
        // $appointment->patient = $patient->name; // Assuming 'name' is a column in the 'patients' table
        // $appointment->service = $request->service;
        // $appointment->new_date_column = $request->date;
        // $appointment->new_time_column = $request->time;

        // // Save the appointment model to the database
        // $appointment->save();

        // // Redirect back to the previous page
        // return redirect('/add_appointment_view')->with('success', 'Appointment added successfully.');

        // Assign other fields from the request to the patient model
        $appointment = new Appointment;
    $appointment->doctor_name = $request->doctor_name;
    $appointment->patient_name = $request->patient_name;
    $appointment->service = $request->service;
    $appointment->new_date_column = $request->date;
    $appointment->new_time_column = $request->time;


    // Save the appointment model to the database
    $appointment->save();

    // Redirect back to the previous page
    return redirect('/add_appointment_view');

    }

    public function upload_medicine (Request $request){
        $medicine = new Medicine;
        $medicine->medicine_name = $request->medicine_name;
        $medicine->quantity = $request->quantity;
        $medicine->date_added = $request->date_added;
        $medicine->expiration_date = $request->expiration_date;



        // Save the medicine model to the database
        $medicine->save();

        // Redirect back to the previous page
        return redirect('/add_medicine_view');

    }

}
