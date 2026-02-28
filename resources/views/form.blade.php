@extends('master')
@section('content')

<body>
    <div class="container">
        <div class="header">
            <div class="welcome-badge">LET'S WORK TOGETHER</div>
            <h1 class="section-title">Book an Appointment</h1>
            <p class="section-subtitle">Schedule Your Design Consultation</p>
            <p class="intro-text">
                Ready to bring your vision to life? Book a consultation session to discuss your design needs, 
                preferences, and project goals. Let's create something amazing together!
            </p>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success" style="background: #d4edda; color: #155724; padding: 15px; border-radius: 10px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
                ✅ {{ session('success') }}
            </div>
        @endif

        <!-- Error Messages -->
        @if($errors->any())
            <div class="alert alert-danger" style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 10px; margin-bottom: 20px; border: 1px solid #f5c6cb;">
                <strong>Please fix the following errors:</strong>
                <ul style="margin: 10px 0 0 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="form-container" id="appointmentForm" action="{{ route('booking.store') }}" method="POST">
            @csrf
            
            <!-- PERSONAL INFORMATION -->
            <div class="form-section">
                <h3>Personal Information</h3>
                
                <div class="form-group">
                    <label>Full Name <span class="required">*</span></label>
                    <input type="text" name="fullName" required placeholder="Enter your full name" value="{{ old('fullName') }}">
                    @error('fullName')
                        <span style="color: #e53e3e; font-size: 12px;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Email Address <span class="required">*</span></label>
                    <input type="email" name="email" required placeholder="your.email@example.com" value="{{ old('email') }}">
                    @error('email')
                        <span style="color: #e53e3e; font-size: 12px;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Phone Number / WhatsApp <span class="required">*</span></label>
                    <input type="tel" name="phone" required placeholder="+234 000 000 0000" value="{{ old('phone') }}">
                    @error('phone')
                        <span style="color: #e53e3e; font-size: 12px;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Brand/Company Name</label>
                    <input type="text" name="brandName" placeholder="Optional - if applicable" value="{{ old('brandName') }}">
                </div>
            </div>

            <!-- APPOINTMENT DETAILS -->
            <div class="form-section">
                <h3>Appointment Details</h3>
                
                <div class="form-group">
                    <label>Preferred Date <span class="required">*</span></label>
                    <input type="date" name="appointmentDate" required value="{{ old('appointmentDate') }}" min="{{ date('Y-m-d', strtotime('+3 days')) }}">
                    <p class="helper-text">Please select a date at least 3 days in advance</p>
                    @error('appointmentDate')
                        <span style="color: #e53e3e; font-size: 12px;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Preferred Time <span class="required">*</span></label>
                    <select name="appointmentTime" required>
                        <option value="">Select a time slot</option>
                        <option value="09:00" {{ old('appointmentTime') == '09:00' ? 'selected' : '' }}>9:00 AM</option>
                        <option value="10:00" {{ old('appointmentTime') == '10:00' ? 'selected' : '' }}>10:00 AM</option>
                        <option value="11:00" {{ old('appointmentTime') == '11:00' ? 'selected' : '' }}>11:00 AM</option>
                        <option value="12:00" {{ old('appointmentTime') == '12:00' ? 'selected' : '' }}>12:00 PM</option>
                        <option value="13:00" {{ old('appointmentTime') == '13:00' ? 'selected' : '' }}>1:00 PM</option>
                        <option value="14:00" {{ old('appointmentTime') == '14:00' ? 'selected' : '' }}>2:00 PM</option>
                        <option value="15:00" {{ old('appointmentTime') == '15:00' ? 'selected' : '' }}>3:00 PM</option>
                        <option value="16:00" {{ old('appointmentTime') == '16:00' ? 'selected' : '' }}>4:00 PM</option>
                        <option value="17:00" {{ old('appointmentTime') == '17:00' ? 'selected' : '' }}>5:00 PM</option>
                    </select>
                    @error('appointmentTime')
                        <span style="color: #e53e3e; font-size: 12px;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Meeting Type <span class="required">*</span></label>
                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="meetingType" value="video" required {{ old('meetingType') == 'video' ? 'checked' : '' }}>
                            <span>Video Call (Zoom/Google Meet)</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="meetingType" value="phone" required {{ old('meetingType') == 'phone' ? 'checked' : '' }}>
                            <span>Phone Call</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="meetingType" value="in-person" required {{ old('meetingType') == 'in-person' ? 'checked' : '' }}>
                            <span>In-Person Meeting</span>
                        </label>
                    </div>
                    @error('meetingType')
                        <span style="color: #e53e3e; font-size: 12px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- SERVICE NEEDED -->
            <div class="form-section">
                <h3>Services Needed</h3>
                
                <div class="form-group">
                    <label>What type of design service do you need? <span class="required">*</span></label>
                    <p class="helper-text">Select all that apply</p>
                    <div class="services-grid">
                        <label class="service-card">
                            <input type="checkbox" name="services[]" value="social-media" {{ in_array('social-media', old('services', [])) ? 'checked' : '' }}>
                            Social Media Graphics
                        </label>
                        <label class="service-card">
                            <input type="checkbox" name="services[]" value="branding" {{ in_array('branding', old('services', [])) ? 'checked' : '' }}>
                            Brand Identity & Logo
                        </label>
                        <label class="service-card">
                            <input type="checkbox" name="services[]" value="flyers" {{ in_array('flyers', old('services', [])) ? 'checked' : '' }}>
                            Flyers & Posters
                        </label>
                        <label class="service-card">
                            <input type="checkbox" name="services[]" value="event" {{ in_array('event', old('services', [])) ? 'checked' : '' }}>
                            Event Graphics
                        </label>
                        <label class="service-card">
                            <input type="checkbox" name="services[]" value="tgif" {{ in_array('tgif', old('services', [])) ? 'checked' : '' }}>
                            TGIF/New Month Posts
                        </label>
                        <label class="service-card">
                            <input type="checkbox" name="services[]" value="other" {{ in_array('other', old('services', [])) ? 'checked' : '' }}>
                            Other Design Services
                        </label>
                    </div>
                    @error('services')
                        <span style="color: #e53e3e; font-size: 12px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- PROJECT OVERVIEW -->
            <div class="form-section">
                <h3>Project Overview</h3>
                
                <div class="form-group">
                    <label>Brief Description of Your Project <span class="required">*</span></label>
                    <textarea name="projectDescription" required placeholder="Tell me about your project, goals, and what you're looking to achieve...">{{ old('projectDescription') }}</textarea>
                    <p class="helper-text">The more details you provide, the better prepared I'll be for our consultation</p>
                    @error('projectDescription')
                        <span style="color: #e53e3e; font-size: 12px;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Project Timeline/Deadline</label>
                    <input type="date" name="projectDeadline" placeholder="When do you need this completed?" value="{{ old('projectDeadline') }}">
                </div>

                <div class="form-group">
                    <label>Budget Range (Optional)</label>
                    <select name="budget">
                        <option value="">Prefer not to say</option>
                        <option value="under-50k" {{ old('budget') == 'under-50k' ? 'selected' : '' }}>Under ₦50,000</option>
                        <option value="50k-100k" {{ old('budget') == '50k-100k' ? 'selected' : '' }}>₦50,000 - ₦100,000</option>
                        <option value="100k-250k" {{ old('budget') == '100k-250k' ? 'selected' : '' }}>₦100,000 - ₦250,000</option>
                        <option value="250k-500k" {{ old('budget') == '250k-500k' ? 'selected' : '' }}>₦250,000 - ₦500,000</option>
                        <option value="500k-plus" {{ old('budget') == '500k-plus' ? 'selected' : '' }}>₦500,000+</option>
                    </select>
                </div>
            </div>

            <!-- ADDITIONAL INFO -->
            <div class="form-section">
                <h3>Additional Information</h3>
                
                <div class="form-group">
                    <label>How did you hear about me?</label>
                    <select name="referral">
                        <option value="">Select an option</option>
                        <option value="instagram" {{ old('referral') == 'instagram' ? 'selected' : '' }}>Instagram</option>
                        <option value="facebook" {{ old('referral') == 'facebook' ? 'selected' : '' }}>Facebook</option>
                        <option value="twitter" {{ old('referral') == 'twitter' ? 'selected' : '' }}>Twitter/X</option>
                        <option value="referral" {{ old('referral') == 'referral' ? 'selected' : '' }}>Friend/Colleague Referral</option>
                        <option value="google" {{ old('referral') == 'google' ? 'selected' : '' }}>Google Search</option>
                        <option value="portfolio" {{ old('referral') == 'portfolio' ? 'selected' : '' }}>Portfolio Website</option>
                        <option value="other" {{ old('referral') == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Any specific questions or concerns?</label>
                    <textarea name="additionalNotes" placeholder="Optional - anything else you'd like me to know before our meeting...">{{ old('additionalNotes') }}</textarea>
                </div>
            </div>

            <!-- AGREEMENT -->
            <label class="checkbox-label">
                <input type="checkbox" name="agreement" required {{ old('agreement') ? 'checked' : '' }}>
                <span>I understand that this appointment is subject to confirmation and I will receive a confirmation email within 24 hours <span class="required">*</span></span>
            </label>
            @error('agreement')
                <span style="color: #e53e3e; font-size: 12px; display: block; margin-top: 5px;">{{ $message }}</span>
            @enderror

            <button type="submit" class="submit-btn">
                BOOK APPOINTMENT
            </button>
        </form>
    </div>
@endsection