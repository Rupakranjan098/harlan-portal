@extends('layouts.app')

@section('title', 'Contact Us | Harlan Group')

@section('styles')
<style>
    .contact-card {
        background: var(--white);
        padding: 60px;
        border-radius: 24px;
        box-shadow: var(--shadow-xl);
        border: 1px solid var(--border);
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }
    
    .contact-input {
        width: 100%;
        padding: 16px 20px;
        border: 2px solid var(--border);
        border-radius: 12px;
        background: var(--light);
        font-family: var(--font-main);
        font-size: 16px;
        transition: var(--transition);
        outline: none;
        color: var(--text-main);
    }

    .contact-input:focus {
        border-color: var(--primary);
        background: var(--white);
        box-shadow: 0 0 0 4px rgba(230, 103, 13, 0.1);
    }

    .contact-input::placeholder {
        color: #A0A0A0;
    }

    .input-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .input-label {
        font-size: 13px;
        font-weight: 700;
        color: var(--text-muted);
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .info-card {
        background: var(--white);
        padding: 30px;
        border-radius: 16px;
        box-shadow: var(--shadow-sm);
        border: 1px solid var(--border);
        transition: var(--transition);
        display: flex;
        gap: 20px;
        align-items: flex-start;
    }

    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-md);
        border-color: rgba(230, 103, 13, 0.3);
    }

    .info-icon {
        width: 50px;
        height: 50px;
        background: rgba(230, 103, 13, 0.1);
        color: var(--primary);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
        transition: var(--transition);
    }

    .info-card:hover .info-icon {
        background: var(--primary);
        color: var(--white);
        transform: scale(1.1);
    }

    .office-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));
        gap: 15px;
    }

    .office-tag {
        background: var(--light);
        border: 1px solid var(--border);
        padding: 12px 15px;
        border-radius: 12px;
        font-size: 14px;
        font-weight: 600;
        text-align: center;
        transition: var(--transition);
        cursor: default;
        white-space: nowrap;
    }

    .office-tag:hover {
        background: var(--white);
        border-color: var(--primary);
        color: var(--primary);
        box-shadow: var(--shadow-sm);
        transform: translateY(-2px);
    }

    /* Glassmorphic decorative blob */
    .blob {
        position: absolute;
        width: 300px;
        height: 300px;
        background: linear-gradient(45deg, var(--primary), #FF9800);
        border-radius: 50%;
        filter: blur(60px);
        opacity: 0.1;
        z-index: 0;
        top: -100px;
        right: -100px;
        pointer-events: none;
    }
</style>
@endsection

@section('content')
    <!-- Contact Hero -->
    <section class="hero" style="height: 60vh; min-height: 500px; background-image: linear-gradient(rgba(18, 18, 18, 0.7), rgba(18, 18, 18, 0.8)), url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1920&q=80');">
        <div class="container" style="display: flex; align-items: center; height: 100%;">
            <div class="hero-content" style="max-width: 800px;">
                <span class="section-tag" style="color: white; background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); padding: 8px 20px; border-radius: 30px; display: inline-block; backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); margin-bottom: 25px;">GET IN TOUCH</span>
                <h1 style="font-size: 72px; margin-bottom: 20px; line-height: 1;">LET'S BUILD<br><span style="color: var(--primary);">THE FUTURE</span></h1>
                <p style="font-size: 20px; opacity: 0.9;">We welcome enquiries from project owners, joint venture partners, investors, and prospective clients worldwide.</p>
            </div>
        </div>
    </section>

    <!-- Contact Form & Info -->
    <section style="padding: 120px 0; background: #FDFDFD; position: relative; overflow: hidden;">
        <!-- Background Decoration -->
        <div style="position: absolute; top: 20%; left: -5%; width: 500px; height: 500px; background: rgba(230, 103, 13, 0.03); border-radius: 50%; filter: blur(80px); pointer-events: none;"></div>

        <div class="container">
            <div class="contact-grid">
                
                <!-- Info Column -->
                <div style="display: flex; flex-direction: column; gap: 40px;">
                    <div>
                        <span class="section-tag">GLOBAL REACH</span>
                        <h2 style="font-size: 42px; margin-bottom: 20px; line-height: 1.1;">WE'RE HERE TO<br>ASSIST YOU</h2>
                        <p style="color: var(--text-muted); font-size: 18px;">Reach out to our global team to discuss your next visionary project or to learn more about our capabilities.</p>
                    </div>
                    
                    <div style="display: flex; flex-direction: column; gap: 20px;">
                        <div class="info-card">
                            <div class="info-icon"><i class="fas fa-building"></i></div>
                            <div>
                                <h4 style="font-size: 16px; margin-bottom: 8px;">GLOBAL HEADQUARTERS</h4>
                                <p style="font-size: 15px; color: var(--text-muted); line-height: 1.5;">Harlan Tower, Ballindamm 17<br>20095 Hamburg, Germany</p>
                            </div>
                        </div>
                        
                        <div class="info-card">
                            <div class="info-icon"><i class="fas fa-phone-alt"></i></div>
                            <div>
                                <h4 style="font-size: 16px; margin-bottom: 8px;">DIRECT LINE</h4>
                                <p style="font-size: 15px; color: var(--text-muted); line-height: 1.5;">+49 40 6000 2200<br><span style="font-size: 13px; opacity: 0.7;">Mon-Fri, 9:00 AM - 6:00 PM CET</span></p>
                            </div>
                        </div>
                        
                        <div class="info-card">
                            <div class="info-icon"><i class="fas fa-envelope-open-text"></i></div>
                            <div>
                                <h4 style="font-size: 16px; margin-bottom: 8px;">EMAIL INQUIRIES</h4>
                                <p style="font-size: 15px; color: var(--text-muted); line-height: 1.5;">info@harlangroup.com<br>investors@harlangroup.com</p>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 20px;">
                        <h4 style="font-size: 14px; margin-bottom: 20px; color: var(--text-muted); letter-spacing: 1px; text-transform: uppercase;">REGIONAL OFFICES</h4>
                        <div class="office-grid">
                            <div class="office-tag">Lagos</div>
                            <div class="office-tag">Dubai</div>
                            <div class="office-tag">Singapore</div>
                            <div class="office-tag">New York</div>
                            <div class="office-tag">Santiago</div>
                            <div class="office-tag">Almaty</div>
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="contact-card">
                    <div class="blob"></div>
                    <div style="position: relative; z-index: 1;">
                        <h3 style="font-size: 32px; margin-bottom: 10px;">Send a Message</h3>
                        <p style="color: var(--text-muted); margin-bottom: 40px; font-size: 16px;">Fill out the form below and our regional team will respond within 24 hours.</p>

                        <form action="#" method="POST" class="contact-form-grid">
                            @csrf
                            <div class="input-group">
                                <label class="input-label">FULL NAME</label>
                                <input type="text" name="name" class="contact-input" placeholder="John Doe" required>
                            </div>
                            
                            <div class="input-group">
                                <label class="input-label">COMPANY</label>
                                <input type="text" name="company" class="contact-input" placeholder="Your Organization">
                            </div>
                            
                            <div class="input-group" style="grid-column: span 2;">
                                <label class="input-label">EMAIL ADDRESS</label>
                                <input type="email" name="email" class="contact-input" placeholder="john@company.com" required>
                            </div>
                            
                            <div class="input-group" style="grid-column: span 2;">
                                <label class="input-label">PHONE NUMBER</label>
                                <input type="tel" name="phone" class="contact-input" placeholder="+1 (555) 000-0000">
                            </div>
                            
                            <div class="input-group" style="grid-column: span 2;">
                                <label class="input-label">MESSAGE</label>
                                <textarea name="message" class="contact-input" placeholder="Tell us about your project or inquiry..." rows="5" required style="resize: vertical; min-height: 120px;"></textarea>
                            </div>
                            
                            <button type="submit" class="btn-primary" style="grid-column: span 2; width: 100%; justify-content: center; padding: 20px; font-size: 16px; margin-top: 10px;">
                                Send Enquiry <i class="fas fa-arrow-right" style="margin-left: 8px;"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section style="position: relative; height: 500px; width: 100%; overflow: hidden; background: #EEE;">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.178544795325!2d55.27078281500645!3d25.197197083896173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43348a67e24b%3A0xff45e502e1ceb7e2!2sDubai%2C%20United%20Arab%20Emirates!5e0!3m2!1sen!2sae!4v1652427845688!5m2!1sen!2sae" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        
        <div class="container" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; pointer-events: none; display: flex; align-items: flex-end; padding-bottom: 50px;">
            <div style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); padding: 30px; border-radius: 16px; box-shadow: var(--shadow-xl); pointer-events: auto; max-width: 400px; border: 1px solid rgba(255,255,255,0.5);">
                <h3 style="font-size: 24px; margin-bottom: 10px; color: var(--dark);">UAE Regional Hub</h3>
                <p style="color: var(--text-muted); line-height: 1.6; margin-bottom: 15px;">Our state-of-the-art regional headquarters located in the heart of Dubai, managing all Middle East operations.</p>
                <a href="https://maps.google.com/?q=Dubai" target="_blank" style="display: inline-flex; align-items: center; gap: 10px; color: var(--primary); font-weight: 600; text-decoration: none;">
                    <i class="fas fa-location-arrow"></i> Get Directions
                </a>
            </div>
        </div>
    </section>
@endsection
