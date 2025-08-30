
<style>
    .page-wrapper {
        background: linear-gradient(135deg, #f5f7fa 0%, #e4e9f0 100%);
        min-height: 100vh;
        padding-top: 3rem;
        padding-bottom: 3rem;
    }

    .page-title {
        color: #1a1a1a;
        font-weight: 700;
        font-size: 2rem;
    }

    .breadcrumb {
        background: transparent;
        padding: 0;
    }

    .breadcrumb-item a {
        color: #6c757d;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .breadcrumb-item a:hover {
        color: #007bff;
    }

    .card {
        border-radius: 1rem;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
    }

    .card-header {
        background: linear-gradient(90deg, #007bff, #0056b3);
        border-bottom: none;
        padding: 1.5rem;
        border-top-left-radius: 1rem !important;
        border-top-right-radius: 1rem !important;
    }

    .card-title {
        font-weight: 600;
        color: #fff;
    }

    .form-label {
        color: #2c3e50;
        font-size: 1.3rem;
        margin-bottom: 0.5rem;
    }

    .form-control, .form-select {
        border: 1px solid #d1d8e0;
        border-radius: 0.5rem;
        padding: 0.75rem 1rem;
        font-size: 1rem;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus, .form-select:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.15);
    }

    .form-control::placeholder {
        color: #adb5bd;
    }

    .invalid-feedback {
        font-size: 0.85rem;
        color: #dc3545;
    }

    .btn-primary {
        background: linear-gradient(90deg, #007bff, #0056b3);
        border: none;
        float: right;
        border-radius: 6px;
        font-weight: 500;
        padding: 0.75rem 2rem;
        transition: background 0.3s ease, transform 0.2s ease;
    }

    .btn-primary:hover {
        background: linear-gradient(90deg, #0056b3, #003d80);
        transform: translateY(-2px);
    }

    .btn-outline-secondary {
        border-color: #6c757d;
        color: #6c757d;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-outline-secondary:hover {
        background-color: #6c757d;
        color: #fff;
    }
</style>
@php use GuzzleHttp\Psr7\Message; @endphp
@extends('frontend.layouts.app')
@section('website')
    <div class="page-wrapper">
        <div class="container py-5">
            <!-- Page Header -->
            <div class="page-header mb-5">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <h1 class="page-title mb-2">Patient Appointment Form</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#" class="text-muted">Home</a></li>
                                <li class="breadcrumb-item"><a href="#" class="text-muted">Patients</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-2 mt-3">
                        <a href="{{ url()->previous() }}" class="btn btn-lg btn-primary float-right">
                            Back
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card shadow-lg border-0 rounded-4">
                        <div class="card-body p-5">
                            {!! html()->form('POST', route('patient-appointment.store'))->attribute('enctype', 'multipart/form-data')->class('needs-validation')->open() !!}
                            <div class="row">
                                <!-- Patient Details Card -->
                                <div class="col-md-12 mb-4">
                                    <div class="card shadow-sm">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0">Patient Details</h4>
                                        </div>
                                        <div class="card-body row g-3">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        {!! Html::label('CNIC Number', 'cnic_number')->class('form-label') !!}
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="bi bi-person-vcard"></i></span>
                                                            {!! Html::text('cnic_number')->id('cnic_number')->class('form-control')->placeholder('Enter CNIC')->attribute('maxlength', '13')->required() !!}
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        {!! Html::label('Name', 'name')->class('form-label') !!}
                                                        {!! Html::text('name')->id('name')->class('form-control')->placeholder('Patient Name')->required() !!}
                                                    </div>
                                                    @error('name')
                                                    <div class="text-danger small">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        {!! Html::label('Email', 'email')->class('form-label') !!}
                                                        {!! Html::email('email')->id('email')->class('form-control')->placeholder('Email')!!}
                                                    </div>
                                                    <div class="col-md-6">
                                                        {!! Html::label('Contact Number', 'contact_number')->class('form-label') !!}
                                                        {!! Html::text('contact_number')->id('contact_number')->class('form-control')->placeholder('Contact')->attribute('maxlength', '11')->required() !!}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        {!! Html::label('Gender', 'gender')->class('form-label') !!}
                                                        {!! html()->select('gender', isset($genderList) ? $genderList : ['male' => 'Male', 'female' => 'Female'])->id('gender')->class('form-select')->placeholder('Select Gender')->required() !!}
                                                    </div>
                                                    @error('gender')
                                                    <div class="text-danger small">{{$message}}</div>
                                                    @enderror
                                                    <div class="col-md-6">
                                                        {!! Html::label('Age', 'age')->class('form-label') !!}
                                                        {!! Html::text('age')->id('age')->class('form-control')->placeholder('Age')->required() !!}
                                                    </div>
                                                    @error('age')
                                                    <div class="text-danger small">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                {!! Html::label('Address', 'address')->class('form-label') !!}
                                                {!! Html::textarea('address')->id('address')->class('form-control')->placeholder('Address')->required() !!}
                                            </div>
                                            @error('address')
                                            <div class="text-danger small">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Appointment Details Card -->
                                <div class="col-md-12 mt-4">
                                    <div class="card shadow-sm ">
                                        <div class="card-header ">
                                            <h4 class="card-title mb-0">Appointment Details</h4>
                                        </div>
                                        <div class="card-body row g-3 mt-4">
                                            <div class="col-md-6 d-none">
                                                {!! Html::label('Doctor', 'doctor_id')->class('form-label') !!}
                                                {!! html()->text('doctor_id', isset($doctor_id) ? $doctor_id : '')->id('doctor_id')->class('form-control')->required() !!}
                                            </div>
                                            <div class="col-md-3">
                                                {!! Html::label('Fee Head', 'fee_head_id')->class('form-label') !!}
                                                {!! html()->select('fee_head_id', isset($feesheads) ? $feesheads : [])->id('fee_head_id')->class('form-select')->placeholder('Select Fee Head')->required() !!}
                                            </div>
                                            <div class="col-md-3">
                                                {!! Html::label('Amount', 'amount')->class('form-label') !!}
                                                {!! Html::text('amount')->id('amount')->class('form-control')->attribute('readonly')->required() !!}
                                            </div>
                                            <div class="col-md-3">
                                                {!! Html::label('Available Day', 'day')->class('form-label') !!}
                                                {!! html()->select('day', [])->id('day')->class('form-select')->placeholder('Select Day')->required() !!}
                                            </div>
                                            <div class="col-md-3">
                                                {!! Html::label('Time', 'from_time')->class('form-label') !!}
                                                {!! html()->select('from_time', [])->id('from_time')->class('form-select')->required() !!}
                                            </div>
                                            <div class="col-md-12">
                                                {!! Html::label('Treatment', 'treatment')->class('form-label') !!}
                                                {!! Html::textarea('treatment')->id('treatment')->class('form-control')->placeholder('Treatment') !!}
                                            </div>
                                            <div class="col-md-12">
                                                <div id="schedule-error" class="error-message" style="display: none;">
                                                    No schedule found for this doctor.
                                                </div>
                                            </div>
                                            <div class="col-12 text-end mt-5 mb-5">
                                                {!! html()->submit('Book Appointment')->class('btn btn-lg btn-primary px-4') !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {!! html()->form()->close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap 5 JS for validation -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // Bootstrap form validation
            (function () {
                'use strict';
                const forms = document.querySelectorAll('.needs-validation');
                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            })();

            // Fee Head Amount
            document.addEventListener('DOMContentLoaded', function () {
                const feeHeadSelect = document.getElementById('fee_head_id');
                const amountInput = document.getElementById('amount');
                const feeStructures = @json($feestructures); // Fetch feestructures from backend

                console.log('Fee Structures:', feeStructures);

                if (feeHeadSelect && amountInput) {
                    feeHeadSelect.addEventListener('change', function () {
                        const selectedFeeHeadId = this.value;
                        const amount = feeStructures[selectedFeeHeadId] || '';
                        amountInput.value = amount;
                    });
                }
            });

            // Doctor Schedule
            document.addEventListener('DOMContentLoaded', function () {
                const doctorInput = document.getElementById('doctor_id');
                const daySelect = document.getElementById('day');
                const fromTimeSelect = document.getElementById('from_time');
                const scheduleError = document.getElementById('schedule-error');
                const doctorSchedules = @json($schedule); // Fetch schedules from backend
                const availableDays = @json($availableDays); // Fetch available days from backend
                const availableTimes = @json($availableTimes); // Fetch available times from backend

                // Debug logs to inspect data
                console.log('Doctor Schedules:', doctorSchedules);
                console.log('Available Days:', availableDays);
                console.log('Available Times:', availableTimes);
                console.log('Doctor ID:', doctorInput ? doctorInput.value : 'Not found');

                const clearDropdown = (select) => {
                    select.innerHTML = `<option value="">Select ${select.id === 'day' ? 'Day' : 'Time'}</option>`;
                };

                const populateDays = (schedules) => {
                    if (!daySelect) return;
                    clearDropdown(daySelect);
                    const uniqueDayIds = [...new Set(schedules.map(s => s.day))].sort((a, b) => a - b);
                    uniqueDayIds.forEach(dayId => {
                        if (availableDays[dayId]) {
                            const option = document.createElement('option');
                            option.value = dayId;
                            option.text = availableDays[dayId];
                            daySelect.appendChild(option);
                        }
                    });
                    scheduleError.style.display = uniqueDayIds.length ? 'none' : 'block';
                };

                const populateTimes = (schedules, selectedDayId) => {
                    if (!fromTimeSelect) return;
                    clearDropdown(fromTimeSelect);
                    const daySchedules = schedules.filter(s => s.day == selectedDayId);
                    const uniqueTimeIds = [...new Set(daySchedules.map(s => s.from_time))].sort((a, b) => a - b);
                    uniqueTimeIds.forEach(timeId => {
                        if (availableTimes[timeId]) {
                            const option = document.createElement('option');
                            option.value = timeId;
                            option.text = availableTimes[timeId];
                            fromTimeSelect.appendChild(option);
                        }
                    });
                };

                const initializeSchedule = () => {
                    if (!doctorInput || !daySelect || !fromTimeSelect || !scheduleError) {
                        console.error('Required elements missing');
                        if (scheduleError) scheduleError.style.display = 'block';
                        return;
                    }
                    const doctorId = doctorInput.value || '';
                    clearDropdown(daySelect);
                    clearDropdown(fromTimeSelect);
                    scheduleError.style.display = 'none';
                    if (!doctorId) {
                        console.warn('No Doctor ID provided');
                        scheduleError.style.display = 'block';
                        return;
                    }
                    const schedules = doctorSchedules.filter(s => s.doctor_id == doctorId);
                    if (schedules.length === 0) {
                        console.warn('No schedules found for doctor ID:', doctorId);
                        scheduleError.style.display = 'block';
                        return;
                    }
                    populateDays(schedules);
                };

                if (doctorInput) {
                    initializeSchedule();
                } else {
                    console.error('Doctor input not found');
                    if (scheduleError) scheduleError.style.display = 'block';
                }

                if (daySelect) {
                    daySelect.addEventListener('change', function () {
                        if (!doctorInput) {
                            console.error('Doctor input not found');
                            scheduleError.style.display = 'block';
                            return;
                        }
                        const doctorId = doctorInput.value || '';
                        const selectedDayId = this.value;
                        clearDropdown(fromTimeSelect);
                        scheduleError.style.display = 'none';
                        if (!doctorId || !selectedDayId) {
                            console.warn('Missing doctorId or selectedDayId');
                            scheduleError.style.display = 'block';
                            return;
                        }
                        const schedules = doctorSchedules.filter(s => s.doctor_id == doctorId && s.day == selectedDayId);
                        if (schedules.length === 0) {
                            console.warn('No schedules found for doctor ID and day:', doctorId, selectedDayId);
                            scheduleError.style.display = 'block';
                            return;
                        }
                        populateTimes(schedules, selectedDayId);
                    });
                }
            });
        </script>
    </div>
@endsection
