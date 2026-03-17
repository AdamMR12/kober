@extends('layouts.app')

@section('content')
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">Terralnvest</div>
            <div class="theme-switch-wrapper">
                <label class="theme-switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label>
                <span class="mode-text">DarkMode</span>
            </div>
        </div>
    </nav>

    <section class="hero" style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('img/bg1.jpg') }}');">
        <div class="hero-content">
            <h1>INVEST IN OUR<br>PLANET'S FUTURE</h1>
            <div class="hero-buttons">
                <a href="{{ route('ecosystems') }}" class="btn btn-primary">EXPLORE</a>
            </div>
        </div>
    </section>

    <section class="problem">
        <h2>THE PROBLEM</h2>
        <div class="stats-container">
            <div class="stat-item">
                <div class="stat-icon">🌡️</div>
                <div class="stat-value">1.5°C</div>
                <div class="stat-label">GLOBAL TEMPERATURES RISING</div>
            </div>
            <div class="stat-item">
                <div class="stat-icon">🌲</div>
                <div class="stat-value">15%</div>
                <div class="stat-label">CRITICAL HABITATS LOST</div>
            </div>
            <div class="stat-item">
                <div class="stat-icon">🏭</div>
                <div class="stat-value">15%</div>
                <div class="stat-label">POLLUTION AT ALARMING LEVELS</div>
            </div>
        </div>
    </section>

    <section class="solution">
        <h2>THE SOLUTION</h2>
        <div class="solution-cards">
            <div class="solution-card">
                <img src="{{ asset('img/pohon.png') }}" alt="Bernea Omigtan">
                <h3>Menyelamatkan paru-paru dunia dengan merestorasi hutan hujan Kalimantan, rumah terakhir orangutan liar</h3>
            </div>
            <div class="solution-card">
                <img src="{{ asset('img/satwa.png') }}" alt="Sanctuary">
                <h3>Menciptakan zona aman bagi gajah dan harimau sumatra untuk berkembang biak di habitat aslinya</h3>
            </div>
            <div class="solution-card">
                <img src="{{ asset('img/terumbu.jpg') }}" alt="Raja Amgo Coral">
                <h3>Menghidupkan kembali taman bawah laut Raja Ampat dengan teknik transplantasi karang inovatif</h3>
            </div>
        </div>
    </section>

    <section class="contribution">
        <h2>YOUR CONTRIBUTION MATTERS</h2>
        <div class="contribution-content">
            <p>Connect directly with local conservation efforts and track real-time progress</p>
            <img src="{{ asset('img/id.svg') }}" alt="Raja Anas Dik">
        </div>
    </section>

    <section class="social-proof">
        <div class="testimonial">
            <p>"I've already planted 3 trees and seen them grow, thanks Terralnvest"</p>
            <cite>- Sarah L.</cite>
        </div>
        <div class="stats">
            <div class="stat">
                <span class="stat-number">15,000+</span>
                <span class="stat-label">TREES PLANTED</span>
            </div>
            <div class="stat">
                <span class="stat-number">50+</span>
                <span class="stat-label">SPECIES PROTECTED</span>
            </div>
            <div class="stat">
                <span class="stat-number">50+</span>
                <span class="stat-label">HABITATS RESTORED</span>
            </div>
        </div>
    </section>

    <section class="newsletter">
        <h2>STAY INFORMED. JOIN OUR COMMUNITY</h2>
        <div class="subscribe-form">
            <input type="email" placeholder="Enter your email">
            <button class="btn btn-primary">SUBSCRIBE</button>
        </div>
    </section>
@endsection