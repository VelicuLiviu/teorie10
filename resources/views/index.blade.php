@extends('layouts.app')
@section('title', 'Acasa')
@section('content')
    <main>
        <section class="info">
            <div class="text">
                <h2>We connect our customers with the best, and help them keep up-and stay open.</h2>
                <div class="services">
                    <div class="active">
                        <img src="{{ asset('imagini/star.png')}}" alt="">
                        We connect our customers with the best.
                    </div>
                    <div>
                        <img src="{{ asset('imagini/ochi.png')}}" alt="">
                        Advisor success customer launch party.
                    </div>
                    <div>
                        <img src="{{ asset('imagini/sun.png')}}" alt="">
                        Business-to-consumer long tail.
                    </div>
                </div>
            </div>
            <div class="grafic">
                <img src="{{ asset('imagini/section2.jpg') }}" alt="">
                <div class="diagrama">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </section>
        <section class="produse">
            <h2>Produse metodice</h2>
            <div class="cards-produse">
                <div class="card">
                    <img src="{{ asset('imagini/produse/1.png') }}" alt="">
                    <h3 class="card-title">Dezvoltarea lecției</h3>
                    <p class="card-description">Este dezvoltarea unei clase de eșantion de o oră de nivel înalt sau a unui training de grup, bazat pe experiențe internaționale, desfășurat cu metode interactive avansate.</p>
                </div>
                <div class="card">
                    <img src="{{ asset('imagini/produse/3.png') }}" alt="">
                    <h3 class="card-title">Lecție video</h3>
                    <p class="card-description">Un videoclip cu o durată de până la 7 minute și un volum de cel mult 300 mb, care explică o prezentare a unei lecții sau o experiență metodică inovatoare personală care luminează metodele interactive în clasă sau activități extracurriculare. Nu contează pe ce dispozitiv a fost făcut videoclipul.</p>
                </div>
                <div class="card">
                    <img src="{{ asset('imagini/produse/2.png') }}" alt="">
                    <h3 class="card-title">Ghid metodic</h3>
                    <p class="card-description">Manuale educaționale metodice; scrisoare de recomandare; brosurile sunt trimise in format pdf.</p>
                </div>
            </div>
        </section>
        <section class="lucrari">
            <h2>Exemplu de lucrari</h2>
            <div class="cards-lucrari">
                <div class="card">
                    <div class="card-body">
                        <h3 class="titlu">Xalida Turakulova</h3>
                        <p class="descriere">
                         <img src="{{ asset('imagini/lucrari/Vector.png') }}" alt="">
                            Regiunea Jizzax or.Jizzax Școala nr. 29
                         </p>
                    </div>
                    <img src="{{ asset('imagini/lucrari/intersect.png') }}" alt="">
                    <div class="more">
                        <ul>
                            <li><img src="{{ asset('imagini/lucrari/user.png')}}" alt=""> Xalida Turakulova</li>
                            <li><img src="{{ asset('imagini/lucrari/user.png')}}" alt=""> Jizzax viloyati, Jizzax shahari</li>
                            <li><img src="{{ asset('imagini/lucrari/user.png')}}" alt="">  Жиззах шхтб 29 Мактаб.</li>
                            <li><img src="{{ asset('imagini/lucrari/user.png')}}" alt=""> 5320</li>
                            <li><img src="{{ asset('imagini/lucrari/user.png')}}" alt=""> 200</li>
                            <li><img src="{{ asset('imagini/lucrari/user.png')}}" alt=""> 5</li>
                        </ul>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h3 class="titlu">Xalida Turakulova</h3>
                        <p class="descriere">
                         <img src="{{ asset('imagini/lucrari/Vector.png') }}" alt="">
                            Regiunea Jizzax or.Jizzax Școala nr. 29
                         </p>
                    </div>
                    <img src="{{ asset('imagini/lucrari/intersect.png') }}" alt="">
                    <div class="more">
                        <ul>
                            <li><img src="{{ asset('imagini/lucrari/user.png')}}" alt=""> Xalida Turakulova</li>
                            <li><img src="{{ asset('imagini/lucrari/user.png')}}" alt=""> Jizzax viloyati, Jizzax shahari</li>
                            <li><img src="{{ asset('imagini/lucrari/user.png')}}" alt="">  Жиззах шхтб 29 Мактаб.</li>
                            <li><img src="{{ asset('imagini/lucrari/user.png')}}" alt=""> 5320</li>
                            <li><img src="{{ asset('imagini/lucrari/user.png')}}" alt=""> 200</li>
                            <li><img src="{{ asset('imagini/lucrari/user.png')}}" alt=""> 5</li>
                        </ul>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h3 class="titlu">Xalida Turakulova</h3>
                        <p class="descriere">
                         <img src="{{ asset('imagini/lucrari/Vector.png') }}" alt="">
                            Regiunea Jizzax or.Jizzax Școala nr. 29
                         </p>
                    </div>
                    <img src="{{ asset('imagini/lucrari/intersect.png') }}" alt="">
                    <div class="more">
                        <ul>
                            <li><img src="{{ asset('imagini/lucrari/user.png')}}" alt=""> Xalida Turakulova</li>
                            <li><img src="{{ asset('imagini/lucrari/user.png')}}" alt=""> Jizzax viloyati, Jizzax shahari</li>
                            <li><img src="{{ asset('imagini/lucrari/user.png')}}" alt="">  Жиззах шхтб 29 Мактаб.</li>
                            <li><img src="{{ asset('imagini/lucrari/user.png')}}" alt=""> 5320</li>
                            <li><img src="{{ asset('imagini/lucrari/user.png')}}" alt=""> 200</li>
                            <li><img src="{{ asset('imagini/lucrari/user.png')}}" alt=""> 5</li>
                        </ul>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [
                    'Agile Development',
                    'Investor bandwidth',
                    'A/B testing'
                ],
                datasets: [{
                    data: [35, 30, 35],
                    backgroundColor: [
                    'rgba(105, 230, 166, 1)',
                    'rgba(26, 43, 59, 1)',
                    'rgba(13, 187, 252, 1)'
                    ],
                    hoverOffset: 4
                }]
            },
        });
    </script>
@endpush
