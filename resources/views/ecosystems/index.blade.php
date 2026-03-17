<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecosystems - The Web of Life</title>
    <link rel="stylesheet" href="{{ asset('css/ecosystems.css') }}">
</head>
<body>
    <!-- Navigation untuk horizontal scroll -->
    <nav class="slide-nav">
        <button class="nav-btn prev" onclick="scrollSlides('prev')">←</button>
        <div class="slide-indicators">
            <span class="indicator active" data-index="0"></span>
            <span class="indicator" data-index="1"></span>
            <span class="indicator" data-index="2"></span>
            <span class="indicator" data-index="3"></span>
            <span class="indicator" data-index="4"></span>
            <span class="indicator" data-index="5"></span>
            <span class="indicator" data-index="6"></span>
            <span class="indicator" data-index="7"></span>
            <span class="indicator" data-index="8"></span>
            <span class="indicator" data-index="9"></span>
            <span class="indicator" data-index="10"></span>
            <span class="indicator" data-index="11"></span>
        </div>
        <button class="nav-btn next" onclick="scrollSlides('next')">→</button>
    </nav>

    <!-- Header dengan navigasi kembali -->
    <header class="slide-header">
        <a href="{{ route('home') }}" class="back-btn">← Back</a>
        <div class="header-title">Ecosystems: The Web of Life</div>
    </header>

    <!-- Container untuk horizontal scroll -->
    <div class="slides-container" id="slidesContainer">
        <!-- Slide 1: Cover -->
        <section class="slide" id="slide1">
            <div class="slide-content">
                <h1 class="slide-title">Ecosystems</h1>
                <h2 class="slide-subtitle">The Web of Life</h2>
                <p class="slide-text">
                    Setiap makhluk hidup di Bumi terhubung dalam jaring kehidupan yang kompleks. 
                    Dari hutan hujan tropis hingga terumbu karang, ekosistem menyediakan udara 
                    yang kita hirup, air yang kita minum, dan sumber daya yang kita butuhkan 
                    untuk bertahan hidup.
                </p>
                <div class="slide-decoration">
                    <div class="decoration-circle"></div>
                    <div class="decoration-circle"></div>
                    <div class="decoration-circle"></div>
                </div>
            </div>
        </section>

        <!-- Slide 2: What is an Ecosystem? -->
        <section class="slide" id="slide2">
            <div class="slide-content">
                <h2 class="slide-title">What is an Ecosystem?</h2>
                <p class="slide-text">
                    Ekosistem adalah komunitas makhluk hidup yang berinteraksi dengan lingkungan 
                    fisiknya. Ini mencakup semua organisme di suatu area—tumbuhan, hewan, 
                    mikroorganisme—serta komponen tak hidup seperti udara, air, tanah, dan sinar 
                    matahari.
                </p>
                <p class="slide-text">
                    Setiap ekosistem memiliki keseimbangan yang rumit. Ketika satu spesies 
                    terganggu, efeknya dapat menyebar ke seluruh sistem. Memahami hubungan ini 
                    adalah kunci untuk melindungi planet kita.
                </p>
                <div class="ecosystem-illustration">
                    <div class="eco-node">🌍</div>
                    <div class="eco-node">🌿</div>
                    <div class="eco-node">🦊</div>
                </div>
            </div>
        </section>

        <!-- Slide 3: Components of an Ecosystem -->
        <section class="slide" id="slide3">
            <div class="slide-content">
                <h2 class="slide-title">Components of an Ecosystem</h2>
                <div class="components-grid">
                    <div class="component-card">
                        <div class="component-icon">🌱</div>
                        <h3>Biotic Components</h3>
                        <p><strong>Produsen:</strong> Tumbuhan hijau yang menghasilkan makanan melalui fotosintesis</p>
                        <p><strong>Konsumen:</strong> Hewan herbivor, karnivor, dan omnivor</p>
                        <p><strong>Dekomposer:</strong> Jamur dan bakteri yang menguraikan materi organik</p>
                    </div>
                    <div class="component-card">
                        <div class="component-icon">☀️</div>
                        <h3>Abiotic Components</h3>
                        <p><strong>Sinar matahari:</strong> Sumber energi utama</p>
                        <p><strong>Air:</strong> Esensial untuk semua kehidupan</p>
                        <p><strong>Tanah:</strong> Media tumbuh dan sumber nutrisi</p>
                        <p><strong>Suhu & Iklim:</strong> Menentukan jenis kehidupan yang dapat bertahan</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Slide 4: Energy Flow -->
        <section class="slide" id="slide4">
            <div class="slide-content">
                <h2 class="slide-title">Energy Flow in Ecosystems</h2>
                <p class="slide-text">
                    Energi mengalir melalui ekosistem dalam satu arah: dari matahari ke produsen, 
                    kemudian ke konsumen, dan akhirnya ke dekomposer. Setiap tingkatan hanya 
                    mentransfer sekitar 10% energi ke tingkat berikutnya—sisanya hilang sebagai panas.
                </p>
                <div class="energy-flow">
                    <div class="flow-item">☀️ Matahari</div>
                    <div class="flow-arrow">→</div>
                    <div class="flow-item">🌿 Produsen (100%)</div>
                    <div class="flow-arrow">→</div>
                    <div class="flow-item">🦌 Konsumen Primer (10%)</div>
                    <div class="flow-arrow">→</div>
                    <div class="flow-item">🐅 Konsumen Sekunder (1%)</div>
                    <div class="flow-arrow">→</div>
                    <div class="flow-item">🍄 Dekomposer (0.1%)</div>
                </div>
            </div>
        </section>

        <!-- Slide 5: Nutrient Cycling -->
        <section class="slide" id="slide5">
            <div class="slide-content">
                <h2 class="slide-title">Nutrient Cycling</h2>
                <div class="cycling-grid">
                    <div class="cycling-item">
                        <h3>Siklus Karbon</h3>
                        <p>Karbon bergerak antara atmosfer, lautan, organisme hidup, dan batuan. Fotosintesis menyerap CO2, respirasi melepaskannya kembali.</p>
                    </div>
                    <div class="cycling-item">
                        <h3>Siklus Nitrogen</h3>
                        <p>Nitrogen diubah oleh bakteri menjadi bentuk yang dapat digunakan tumbuhan, lalu kembali ke atmosfer melalui denitrifikasi.</p>
                    </div>
                    <div class="cycling-item">
                        <h3>Siklus Air</h3>
                        <p>Air bergerak melalui evaporasi, kondensasi, presipitasi, dan aliran permukaan, menghubungkan semua ekosistem.</p>
                    </div>
                    <div class="cycling-item">
                        <h3>Siklus Fosfor</h3>
                        <p>Fosfor dari batuan lapuk diserap tumbuhan, berpindah melalui rantai makanan, dan kembali ke tanah melalui dekomposisi.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Slide 6: Types of Ecosystems -->
        <section class="slide" id="slide6">
            <div class="slide-content">
                <h2 class="slide-title">Types of Ecosystems</h2>
                <div class="types-list">
                    <div class="type-item">
                        <span class="type-number">01.</span>
                        <span class="type-name">Ekosistem Terestrial</span>
                        <span class="type-desc">Hutan, padang rumput, gurun, tundra</span>
                    </div>
                    <div class="type-item">
                        <span class="type-number">02.</span>
                        <span class="type-name">Ekosistem Akuatik</span>
                        <span class="type-desc">Air tawar (sungai, danau) dan laut (samudra, terumbu karang)</span>
                    </div>
                    <div class="type-item">
                        <span class="type-number">03.</span>
                        <span class="type-name">Ekosistem Buatan</span>
                        <span class="type-desc">Sawah, bendungan, taman kota, akuarium</span>
                    </div>
                </div>
                <p class="slide-text">
                    Setiap jenis ekosistem memiliki karakteristik unik dan mendukung keanekaragaman 
                    hayati yang berbeda. Dari kutub yang beku hingga hutan hujan yang lembab, 
                    kehidupan menemukan cara untuk berkembang.
                </p>
            </div>
        </section>

        <!-- Slide 7: Terrestrial Ecosystems -->
<section class="slide" id="slide7">
    <div class="slide-content">
        <h2 class="slide-title">Terrestrial Ecosystems</h2>
        <div class="terrestrial-grid">
            <div class="terrestrial-card">
                <div class="card-image">🌲</div>
                <h3>Hutan Hujan Tropis</h3>
                <p>Keanekaragaman hayati tertinggi. Curah hujan tinggi, suhu stabil.</p>
            </div>
            <div class="terrestrial-card">
                <div class="card-image">🌿</div>
                <h3>Sabana & Padang Rumput</h3>
                <p>Musim kering dan basah. Rumput dominan, herbivor besar.</p>
            </div>
            <div class="terrestrial-card">
                <div class="card-image">🏜️</div>
                <h3>Gurun</h3>
                <p>Curah hujan sangat rendah. Adaptasi khusus: kaktus, hewan nokturnal.</p>
            </div>
            <div class="terrestrial-card">
                <div class="card-image">❄️</div>
                <h3>Tundra & Taiga</h3>
                <p>Suhu ekstrem. Lumut, semak kerdil, hewan berbulu tebal.</p>
            </div>
        </div>
    </div>
</section>

        <!-- Slide 8: Aquatic Ecosystems -->
<section class="slide" id="slide8">
    <div class="slide-content">
        <h2 class="slide-title">Aquatic Ecosystems</h2>
        <div class="aquatic-stats">
            <div class="stat-bubble">
                <span class="stat-number">71%</span>
                <span class="stat-label">Permukaan Bumi air</span>
            </div>
            <div class="stat-bubble">
                <span class="stat-number">97%</span>
                <span class="stat-label">Air laut</span>
            </div>
            <div class="stat-bubble">
                <span class="stat-number">3%</span>
                <span class="stat-label">Air tawar</span>
            </div>
        </div>
        <div class="aquatic-types">
            <div class="type-card">
                <h3>🌊 Ekosistem Air Laut</h3>
                <p>Terumbu karang, laut dalam, estuari. Menyerap 30% CO2 dan menghasilkan 50% oksigen.</p>
            </div>
            <div class="type-card">
                <h3>💧 Ekosistem Air Tawar</h3>
                <p>Danau, sungai, rawa. Hanya 0.3% air dunia tapi mendukung 10% spesies.</p>
            </div>
        </div>
    </div>
</section>

        <!-- Slide 9: Ecosystem Services -->
        <section class="slide" id="slide9">
            <div class="slide-content">
                <h2 class="slide-title">Ecosystem Services</h2>
                    <p class="slide-text">
                        Ekosistem memberikan jasa yang tak ternilai bagi kelangsungan hidup manusia:
                    </p>
                    <div class="services-grid">
                        <div class="service-item">
                            <span class="service-icon">🌬️</span>
                            <h3>Jasa Penyediaan</h3>
                            <p>Makanan, air bersih, kayu, serat, obat-obatan</p>
                        </div>
                        <div class="service-item">
                            <span class="service-icon">🔄</span>
                            <h3>Jasa Pengaturan</h3>
                            <p>Pengaturan iklim, pemurnian air, penyerbukan, pengendalian hama</p>
                        </div>
                        <div class="service-item">
                            <span class="service-icon">🏞️</span>
                            <h3>Jasa Pendukung</h3>
                            <p>Siklus nutrisi, pembentukan tanah, fotosintesis</p>
                        </div>
                        <div class="service-item">
                            <span class="service-icon">🧘</span>
                            <h3>Jasa Budaya</h3>
                            <p>Rekreasi, spiritual, estetika, pendidikan</p>
                        </div>
                    </div>
                    <p class="slide-text">
                        Nilai ekonomi jasa ekosistem diperkirakan mencapai $125–$140 triliun per tahun—jauh melebihi PDB global.
                    </p>
            </div>
        </section>

        <!-- Slide 10: Conservation Efforts -->
        <section class="slide" id="slide10">
            <div class="slide-content">
                <h2 class="slide-title">Conservation Efforts</h2>
                <p class="slide-text">
                    Untuk melindungi ekosistem yang tersisa, berbagai upaya konservasi dilakukan:
                </p>
                <div class="strategies">
                    <span class="strategy-tag">🏞️ Kawasan Lindung (15% daratan, 7% lautan)</span>
                    <span class="strategy-tag">🌳 Reforestasi & Restorasi</span>
                    <span class="strategy-tag">♻️ Praktik Berkelanjutan</span>
                    <span class="strategy-tag">📚 Pendidikan Lingkungan</span>
                    <span class="strategy-tag">⚖️ Kebijakan & Regulasi</span>
                    <span class="strategy-tag">🤝 Konservasi Berbasis Masyarakat</span>
                </div>
                <p class="slide-text">
                    Target internasional: melindungi 30% daratan dan lautan pada tahun 2030 (30x30).
                </p>
            </div>
        </section>

        <!-- Slide 11: The Future of Ecosystems -->
        <section class="slide" id="slide11">
            <div class="slide-content">
                <h2 class="slide-title">The Future of Ecosystems</h2>
                    <div class="future-grid">
                        <div class="future-item challenges">
                            <h3>Ancaman Utama</h3>
                            <ul>
                                <li>🌡️ Perubahan iklim - 1,5°C pemanasan global</li>
                                <li>🏭 Deforestasi - 10 juta hektar/tahun</li>
                                <li>🌊 Polusi plastik - 8 juta ton/tahun ke laut</li>
                                <li>📈 Pertumbuhan populasi - 8 miliar+ manusia</li>
                                <li>🦠 Spesies invasif</li>
                            </ul>
                        </div>
                        <div class="future-item solutions">
                            <h3>Solusi & Harapan</h3>
                            <ul>
                                <li>☀️ Energi terbarukan</li>
                                <li>🌱 Pertanian regeneratif</li>
                                <li>🔄 Ekonomi sirkular</li>
                                <li>🤝 Kolaborasi global</li>
                                <li>📱 Teknologi konservasi</li>
                            </ul>
                        </div>
                    </div>
                    <p class="slide-text">
                        Masa depan ekosistem ada di tangan kita. Dengan tindakan kolektif sekarang, 
                        kita masih bisa memulihkan keseimbangan alam.
                    </p>
            </div>
        </section>

        <!-- Slide 12: Thank You -->
        <section class="slide" id="slide12">
            <div class="slide-content thank-you">
                <h1 class="slide-title">Terima Kasih!</h1>
                <p class="slide-text">
                    "Kita tidak mewarisi Bumi dari nenek moyang kita, kita meminjamnya dari anak cucu kita."
                </p>
                <p class="slide-text">- Peribahasa Suku Asli Amerika -</p>
                <div class="decoration-leaves">🌍 🌿 🍃 🌱 🌊 ☀️</div>
                <p class="slide-text" style="margin-top: 2rem; font-size: 1rem;">
                    #InvestInOurPlanet | #EcosystemRestoration | #Terralnvest
                </p>
            </div>
        </section>
    </div>

    <script src="{{ asset('js/ecosystems.js') }}"></script>
</body>
</html>