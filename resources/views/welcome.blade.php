@extends('master')
@section('content')
    <section class="hero">
        <div class="hero-content">
            @if($hero)
             <div class="welcome-badge">{{$hero->welcome_text}}</div>
             @else
            <div class="welcome-badge">WELCOME TO</div>
            @endif
            @if($hero)
            <h1>{{$hero->title}}</h1>
            @else
            <h1>My Portfolio</h1>
            @endif
            <div class="skills-badges">
                <div class="skill-badge" title="Adobe Illustrator">Ai</div>
                <div class="skill-badge" title="Adobe Photoshop">Ps</div>
            </div>
            @if($hero)
            <p class="subtitle">{{$hero->name}}</p>
            @else
            <p class="subtitle">Oluwadamilola Olanrewaju</p>
            @endif
        </div>

        <div class="hero-image">
            <div class="image-container">
                <div class="glow-circle"></div>
                <div class="profile-frame">
                    @if($hero)
                     <img src="{{asset('storage/' . $hero->image)}}" 
                         alt="Portfolio Image" 
                         class="profile-image">
                       @else
                    <img src="img/gg.png" 
                         alt="Portfolio Image" 
                         class="profile-image">
                         @endif
                </div>
                <div class="floating-element float-1">✨</div>
                <div class="floating-element float-2">🎨</div>
            </div>
        </div>
    </section>


    <section class="about" id="about">
        <div class="about-container">
            <div class="about-text">
                @if($about)
                <h2 class="about-title">{{$about->title}}</h2>
                @else
                <h2 class="about-title">Hi, I'm Dami. I create Visuals that make Real Impact through Innovative Designs.</h2>
                @endif
                @if($about)
                <p class="about-description">
                  {{$about->description}}
                </p>
               
           @else
                 <p class="about-description">
                    As a Creative Designer, I love crafting designs that connect, communicate, spark action and have an impact. When I'm not designing, you can find me exploring new trends, sketching ideas, or vibing with creativity!
                </p>
          @endif
          @IF($about)
          
                <p class="about-description">
                  {{$about->highlight}}
                </p>
                    @else
                  <p class="about-description">
                    Specializing in social media designs, logo designs and branding, I bring bold ideas to life with a fresh twist. I have partnered with brands across Nigeria, crafting designs that boost their visibility and amplify their story.
                </p>
@endif
            @if($about)
                <p class="about-tagline">
                     {{$about->section_label}}
                </p>
@else
                  <p class="about-tagline">
                    Every project is crafted with purpose, strategic and built to drive results. Ready to create? Let's make it happen!
                </p>
@endif
                <div class="skills-container">
                    <div class="skill-tag">Graphic Design</div>
                    <div class="skill-tag">Brand Design</div>
                    <div class="skill-tag">Adobe PhotoShop <span class="badge-small">Ps</span></div>
                    <div class="skill-tag">Adobe Illustrator <span class="badge-small">Ai</span></div>
                </div>
            </div>
           
            <div class="about-image">
                <div class="about-image-frame">
                     @if($about)
                    <img src="{{$about->image}}"

                    @else
                    <img src="img/gg.png" 
                    @endif
                         alt="Dami - Creative Designer" 
                         class="about-profile-image">
                </div>
            </div>
        </div>
    </section>
<section class="portfolio" id="projects">
    <div class="portfolio-header">
        @if($brandDesigns && $brandDesigns->count() > 0)
            <h2 class="portfolio-title">
                {{ $brandDesigns->first()->brand_name }}
            </h2>
        @else
            <h2 class="portfolio-title">BRAND DESIGNS</h2>
        @endif
        <div class="title-line"></div>
    </div>

    <div class="portfolio-grid">
        @forelse($brandDesigns as $brandDesign)
            <div class="portfolio-item">
               {{-- Option 1 (most common) --}}
<img src="{{ asset('storage/' . $brandDesign->image) }}" />

            </div>
            
        @empty
            {{-- If there is no record in database --}}
            <div class="portfolio-item">
                <img src="{{ asset('img/gg.png') }}" 
                     alt="Temporary Image" 
                     class="portfolio-image">
            </div>
        @endforelse
    </div>

    <div class="portfolio-footer">
        @if($brandDesigns && $brandDesigns->count() > 0)
            <p class="portfolio-subtitle">
                {{ $brandDesigns->first()->description }}
            </p>
        @else
            <p class="portfolio-subtitle">
                BRAND DESIGNS | DESIGN PORTFOLIO
            </p>
        @endif
    </div>
    </section>

    <div style="background-color:#e8b4a0; padding:0px; margin:0px; width:100%;">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#4a1f18" fill-opacity="1" d="M0,160L48,144C96,128,192,96,288,96C384,96,480,128,576,154.7C672,181,768,203,864,197.3C960,192,1056,160,1152,138.7C1248,117,1344,107,1392,101.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
    </div>
   <section class="tgif-section">
    <div class="tgif-header">
       <h2 class="tgif-title">
    {{ $newMonths->isNotEmpty() ? $newMonths->first()->name : 'NEW MONTH/TGIF DESIGNS' }}
</h2>
        <div class="title-line"></div>
    </div>

    <div class="tgif-grid">
        @forelse($newMonths as $item)
            <div class="tgif-item">
                <img 
                    src="{{ $item->image 
                        ? asset('storage/' . $item->image) 
                        : 'https://images.unsplash.com/photo-1605106702734-205df224ecce?w=600&h=600&fit=crop' 
                    }}" 
                    alt="{{ $item->title ?? 'Design' }}" 
                    class="tgif-image"
                >
            </div>
        @empty
            {{-- Fallback to static images when no DB records --}}
            <div class="tgif-item">
                <img src="https://images.unsplash.com/photo-1605106702734-205df224ecce?w=600&h=600&fit=crop" alt="December" class="tgif-image">
            </div>
            <div class="tgif-item">
                <img src="https://images.unsplash.com/photo-1569083660557-ae3fde51b164?w=600&h=600&fit=crop" alt="October" class="tgif-image">
            </div>
            <div class="tgif-item">
                <img src="https://images.unsplash.com/photo-1472214103451-9374bd1c798e?w=600&h=600&fit=crop" alt="May" class="tgif-image">
            </div>
            <div class="tgif-item">
                <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=600&h=600&fit=crop" alt="September" class="tgif-image">
            </div>
            <div class="tgif-item">
                <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=600&h=600&fit=crop" alt="Friday" class="tgif-image">
            </div>
            <div class="tgif-item">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&h=600&fit=crop" alt="July" class="tgif-image">
            </div>
            <div class="tgif-item">
                <img src="https://images.unsplash.com/photo-1551033406-611cf9a28f67?w=600&h=600&fit=crop" alt="TGIF" class="tgif-image">
            </div>
            <div class="tgif-item">
                <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?w=600&h=600&fit=crop" alt="August" class="tgif-image">
            </div>
        @endforelse
    </div>

    <div class="tgif-footer">
       <p class="tgif-subtitle">
    {{ $newMonths->isNotEmpty() ? $newMonths->first()->title : 'NEW MONTH /TGIF DESIGNS' }} 
</p>
    </div>

       
    </section>
      <div style="background-color:#e8b4a0; padding:0px; margin:0px; width:100%;">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#4a1f18" fill-opacity="1" d="M0,160L48,144C96,128,192,96,288,96C384,96,480,128,576,154.7C672,181,768,203,864,197.3C960,192,1056,160,1152,138.7C1248,117,1344,107,1392,101.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
    </div>
<section class="logofolio-section">
    <div class="logofolio-header">
        <h2 class="logofolio-title">{{ $logoFolios->isNotEmpty() ? $logoFolios->first()->name : 'LOGOFOLIO' }} </h2>
        <div class="title-line"></div>
    </div>

    <div class="logofolio-grid">
        @forelse($logoFolios as $logo)
            <div class="logofolio-item">
                <div class="logo-display">
                    <img 
    src="{{ $logo->image 
        ? asset('storage/' . str_replace('public/', '', $logo->image)) 
        : 'https://images.unsplash.com/photo-1614624532983-4ce03382d63d?w=400&h=400&fit=crop' 
    }}" 
    alt="{{ $logo->name ?? 'Logo' }}" 
    class="logofolio-image"

                    >
                </div>
            </div>
        @empty
            <div class="logofolio-item">
                <div class="logo-display">
                    <img src="https://images.unsplash.com/photo-1614624532983-4ce03382d63d?w=400&h=400&fit=crop" alt="Logo 1" class="logofolio-image">
                </div>
            </div>
            <div class="logofolio-item">
                <div class="logo-display">
                    <img src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?w=400&h=400&fit=crop" alt="Logo 2" class="logofolio-image">
                </div>
            </div>
            <div class="logofolio-item">
                <div class="logo-display">
                    <img src="https://images.unsplash.com/photo-1599305445671-ac291c95aaa9?w=400&h=400&fit=crop" alt="Logo 3" class="logofolio-image">
                </div>
            </div>
            <div class="logofolio-item">
                <div class="logo-display">
                    <img src="https://images.unsplash.com/photo-1611162616305-c69b3fa7fbe0?w=400&h=400&fit=crop" alt="Logo 4" class="logofolio-image">
                </div>
            </div>
            <div class="logofolio-item">
                <div class="logo-display">
                    <img src="https://images.unsplash.com/photo-1611162618071-b39a2ec055fb?w=400&h=400&fit=crop" alt="Logo 5" class="logofolio-image">
                </div>
            </div>
            <div class="logofolio-item">
                <div class="logo-display">
                    <img src="https://images.unsplash.com/photo-1611162616475-46b635cb6868?w=400&h=400&fit=crop" alt="Logo 6" class="logofolio-image">
                </div>
            </div>
            <div class="logofolio-item">
                <div class="logo-display">
                    <img src="https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?w=400&h=400&fit=crop" alt="Logo 7" class="logofolio-image">
                </div>
            </div>
            <div class="logofolio-item">
                <div class="logo-display">
                    <img src="https://images.unsplash.com/photo-1611162616305-c69b3fa7fbe0?w=400&h=400&fit=crop" alt="Logo 8" class="logofolio-image">
                </div>
            </div>
        @endforelse
    </div>

    <div class="logofolio-footer">
        <p class="logofolio-subtitle">
            {{ $logoFolios->isNotEmpty() ? $logoFolios->first()->description : 'LOGOFOLIO' }} | DESIGN PORTFOLIO
        </p>
    </div>

       
    </section>
  <div style="background-color:#e8b4a0; padding:0px; margin:0px; width:100%;">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#4a1f18" fill-opacity="1" d="M0,160L48,144C96,128,192,96,288,96C384,96,480,128,576,154.7C672,181,768,203,864,197.3C960,192,1056,160,1152,138.7C1248,117,1344,107,1392,101.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
    </div>
    <section class="other-section">
        <div class="other-header">
            <h2 class="other-title">{{ $otherDesign->isNotEmpty() ? $otherDesign->first()->title : 'OtherDesign' }}OTHER FLYER DESIGNS</h2>
            <div class="title-line"></div>
        </div>

        <div class="other-grid">
            @forelse($otherDesign as $other)
            <div class="other-item">
               <img
                    src="{{ $other->image
                        ? asset('storage/' . $other->image)
                        : 'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?w=600&h=600&fit=crop'
                    }}"
                    alt="{{ $other->title ?? 'Event' }}"
                    class="event-image"
                >
            </div>
           @empty
            <div class="event-item">
                <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?w=600&h=600&fit=crop" alt="Eid Al-Adha" class="event-image">
            </div>
            <div class="event-item">
                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=600&h=600&fit=crop" alt="Father's Day" class="event-image">
            </div>
            <div class="event-item">
                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&h=600&fit=crop" alt="Paradigm Shift" class="event-image">
            </div>
            <div class="event-item">
                <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=600&h=600&fit=crop" alt="Legacy Moms" class="event-image">
            </div>
            <div class="event-item">
                <img src="https://images.unsplash.com/photo-1478147427282-58a87a120781?w=600&h=600&fit=crop" alt="Grand Opening" class="event-image">
            </div>
            <div class="event-item">
                <img src="https://images.unsplash.com/photo-1535712593684-0efd191312bb?w=600&h=600&fit=crop" alt="Women's Day" class="event-image">
            </div>
            <div class="event-item">
                <img src="https://images.unsplash.com/photo-1429962714451-bb934ecdc4ec?w=600&h=600&fit=crop" alt="Wives Buildup" class="event-image">
            </div>
            <div class="event-item">
                <img src="https://images.unsplash.com/photo-1464047736614-af63643285bf?w=600&h=600&fit=crop" alt="Women's Day Alt" class="event-image">
            </div>
        @endforelse
        </div>

        <div class="other-footer">
            <p class="other-subtitle">{{ $otherDesign->isNotEmpty() ? $otherDesign->first()->description : 'OTHER FLYER DESIGNS | DESIGN PORTFOLIO' }}</p>
        </div>
    </section>
  <div style="background-color:#e8b4a0; padding:0px; margin:0px; width:100%;">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#4a1f18" fill-opacity="1" d="M0,160L48,144C96,128,192,96,288,96C384,96,480,128,576,154.7C672,181,768,203,864,197.3C960,192,1056,160,1152,138.7C1248,117,1344,107,1392,101.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
    </div>
   <section class="event-section">
    <div class="event-header">
        <h2 class="event-title">{{ $eventFlyers->isNotEmpty() ? $eventFlyers->first()->title : 'EVENT FLYER DESIGNS' }}</h2>
        <div class="title-line"></div>
    </div>

    <div class="event-grid">
        @forelse($eventFlyers as $event)
            <div class="event-item">
                <img
                    src="{{ $event->image
                        ? asset('storage/' . $event->image)
                        : 'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?w=600&h=600&fit=crop'
                    }}"
                    alt="{{ $event->title ?? 'Event' }}"
                    class="event-image"
                >
            </div>
        @empty
            <div class="event-item">
                <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?w=600&h=600&fit=crop" alt="Eid Al-Adha" class="event-image">
            </div>
            <div class="event-item">
                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=600&h=600&fit=crop" alt="Father's Day" class="event-image">
            </div>
            <div class="event-item">
                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&h=600&fit=crop" alt="Paradigm Shift" class="event-image">
            </div>
            <div class="event-item">
                <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=600&h=600&fit=crop" alt="Legacy Moms" class="event-image">
            </div>
            <div class="event-item">
                <img src="https://images.unsplash.com/photo-1478147427282-58a87a120781?w=600&h=600&fit=crop" alt="Grand Opening" class="event-image">
            </div>
            <div class="event-item">
                <img src="https://images.unsplash.com/photo-1535712593684-0efd191312bb?w=600&h=600&fit=crop" alt="Women's Day" class="event-image">
            </div>
            <div class="event-item">
                <img src="https://images.unsplash.com/photo-1429962714451-bb934ecdc4ec?w=600&h=600&fit=crop" alt="Wives Buildup" class="event-image">
            </div>
            <div class="event-item">
                <img src="https://images.unsplash.com/photo-1464047736614-af63643285bf?w=600&h=600&fit=crop" alt="Women's Day Alt" class="event-image">
            </div>
        @endforelse
    </div>

    <div class="event-footer">
        <p class="event-subtitle">{{ $eventFlyers->isNotEmpty() ? $eventFlyers->first()->description : 'EVENT FLYER DESIGNS' }}</p>
    </div>
    </section>
  <div style="background-color:#e8b4a0; padding:0px; margin:0px; width:100%;">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#4a1f18" fill-opacity="1" d="M0,160L48,144C96,128,192,96,288,96C384,96,480,128,576,154.7C672,181,768,203,864,197.3C960,192,1056,160,1152,138.7C1248,117,1344,107,1392,101.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
    </div>


    <section class="reviews-section" id="clients">
        <div class="reviews-header">
            @if($clientReview)
            <h2 class="reviews-title">{{$clientReview->review}}</h2>
            @else
             <h2 class="reviews-title">CLIENTS' REVIEWS</h2>
             @endif
            <div class="title-line-white"></div>
        </div>

        <div class="reviews-container">
            <div class="reviews-left">
                <div class="review-bubble bubble-green">
                    @if($clientReview)
                    <div class="bubble-header">{{$clientReview->client_name}}</div>
                    @else
                    <div class="bubble-header">Colours popped</div>
                    @endif
                    @if($clientReview)
                    <div class="bubble-content">{{$clientReview->client_title}}</div>
                    @else
                    <div class="bubble-content">She loved it infact and asked for a frame</div>
                    @endif
                    <div class="bubble-time">9:39 PM</div>
                </div>

                <div class="review-bubble bubble-teal">
                    <div class="bubble-sender">You</div>
                    <div class="bubble-content">Ahhhhhhh 🔥🔥🔥🔥🔥🔥🔥🔥🔥</div>
                    <div class="bubble-time">9:34 AM</div>
                </div>

                <div class="review-bubble bubble-gray">
                    <div class="bubble-content">These designs are 🔥🔥<br>Thank you for your promptness too.</div>
                    <div class="bubble-time">9:23 AM</div>
                </div>
            </div>

            <div class="reviews-right">
                <div class="review-bubble bubble-orange">
                    <div class="bubble-content">Perfect perfect 😁😆😍</div>
                    <div class="bubble-time">1:19 PM</div>
                    <div class="bubble-content-2">She loves it .. Thank youuu</div>
                    <div class="bubble-time">1:19 PM</div>
                </div>

                <div class="satisfied-badge">
                    <div class="badge-number">20+</div>
                    <div class="badge-text">Satisfied<br>Clients</div>
                </div>
            </div>
        </div>

        <div class="reviews-footer">
            <p class="reviews-subtitle">CLIENTS' REVIEWS | DESIGN PORTFOLIO</p>
        </div>

        
    </section>


    
    <section class="contact-section" id="contact">
        <div class="contact-container">
            <div class="contact-left">
                <div class="contact-profile">
                    @if($contact)
                    <img src="{{$contact->image}}" 
                         alt="Oluwadamilola Olanrewaju" 
                         class="contact-image">
                         @else
                           <img src="img/ss.png" 
                         alt="Oluwadamilola Olanrewaju" 
                         class="contact-image">
                         @endif
                    <div class="profile-badge">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="white">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="contact-right">
                <div class="contact-header">
                    <h2 class="contact-title">CONTACT:</h2>
                </div>
                     @if($contact)
                <h3 class="contact-name">{{$contact->name}}</h3>
                @else
                <h3 class="contact-name">Olanrewaju Oluwadamilola E.</h3>
                 @endif
                <div class="contact-details">
                    <a href="https://instagram.com/symply_lisbeth" class="contact-item" target="_blank">
                        <svg class="contact-icon" viewBox="0 0 24 24" fill="#ff8c42">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                        <span class="contact-text">symply_lisbeth</span>
                    </a>

                    <a href="https://x.com/symply_lisbeth" class="contact-item" target="_blank">
                        <svg class="contact-icon" viewBox="0 0 24 24" fill="#ff8c42">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                        <span class="contact-text">symply_lisbeth</span>
                    </a>

                    <a href="https://facebook.com/oluwadamilola.olanrewaju" class="contact-item" target="_blank">
                        <svg class="contact-icon" viewBox="0 0 24 24" fill="#ff8c42">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                        <span class="contact-text">Oluwadamilola Olanrewaju</span>
                    </a>

                    <a href="tel:09065616295" class="contact-item">
                        <svg class="contact-icon" viewBox="0 0 24 24" fill="#ff8c42">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                        @if($contact)
                        <span class="contact-text">{$contact->phone}</span>
                        @else
                        <span class="contact-text">09065616295</span>
                        @endif
                    </a>

                    <a href="mailto:oluwadamilolaolanrewaju@gmail.com" class="contact-item">
                        <svg class="contact-icon" viewBox="0 0 24 24" fill="#ff8c42">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                        @if($contact)
                        <span class="contact-text">{{$contact->email}}</span>
                        @else
                        <span class="contact-text">oluwadamilolaolanrewaju</span>
                        @endif
                    </a>
                </div>
            </div>
        </div>




        <div class="contact-footer">
            @if($contact)
            <p class="contact-subtitle">{{$contact->subject}}</p>
            @else
             <p class="contact-subtitle">CONTACT DETAILS | DESIGN PORTFOLIO</p>
             @endif
        </div>

       
    </section>

    <footer class="footer-section">
         
        
        <div class="footer-content">
            <div class="footer-left">
                @if($footer)
                <p class="footer-copyright">{{$footer->email}}</p>
                @else
                <p class="footer-copyright">© 2026 Oluwadamilola Olanrewaju</p>
                @endif
                <p class="footer-tagline">Crafting Visuals that make Real Impact</p>
            </div>

            <div class="footer-right">
                <div class="footer-socials">
                    <a href="https://instagram.com/symply_lisbeth" class="footer-social-link" target="_blank">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z"/>
                        </svg>
                    </a>
                    <a href="https://x.com/symply_lisbeth" class="footer-social-link" target="_blank">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                    <a href="https://facebook.com/oluwadamilola.olanrewaju" class="footer-social-link" target="_blank">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="mailto:oluwadamilolaolanrewaju@gmail.com" class="footer-social-link">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>



@endsection
