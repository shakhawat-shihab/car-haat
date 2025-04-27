<x-app-layout>

    <main>
        <div class="container">
            <h1 class="car-details-page-title">{{ $carDetails->maker->name }} {{ $carDetails->model->name }} -
                {{ $carDetails->year }}
            </h1>
            <div class="car-details-region">{{ $carDetails->city->name }} - 2 days ago</div>

            <div class="car-details-content">
                <div class="car-images-and-description">
                    <div class="car-images-carousel">
                        <div class="car-image-wrapper">
                            <img src="/img/cars/Lexus-RX200t-2016/1.jpeg" alt="" class="car-active-image"
                                id="activeImage" />

                            <!-- <img src={{ $carDetails->primaryImage->image_path }} alt="" class="car-active-image"
                                id="activeImage" /> -->
                        </div>
                        <div class="car-image-thumbnails">
                            <img src="/img/cars/Lexus-RX200t-2016/1.jpeg" alt="" />
                            <img src="/img/cars/Lexus-RX200t-2016/2.jpeg" alt="" />
                            <img src="/img/cars/Lexus-RX200t-2016/3.jpeg" alt="" />
                            <img src="/img/cars/Lexus-RX200t-2016/4.jpeg" alt="" />
                            <img src="/img/cars/Lexus-RX200t-2016/5.jpeg" alt="" />
                            <img src="/img/cars/Lexus-RX200t-2016/6.jpeg" alt="" />
                            <img src="/img/cars/Lexus-RX200t-2016/7.jpeg" alt="" />
                            <!-- @foreach ($carDetails->images as $image)
                                <img src="{{  $image->image_path }}" alt="" />
                            @endforeach -->
                        </div>
                        <button class="carousel-button prev-button" id="prevButton">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" style="width: 64px">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                        </button>
                        <button class="carousel-button next-button" id="nextButton">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" style="width: 64px">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                    </div>

                    <div class="card car-detailed-description">
                        <h2 class="car-details-title">Detailed Description</h2>
                        <p>
                            <!-- will have html content -->
                            {!! $carDetails->description !!}
                        </p>

                    </div>

                    <div class="card car-detailed-description">
                        <h2 class="car-details-title">Car Specifications</h2>

                        <ul class="car-specifications">
                            <x-car-specification :value="$carDetails->features->abs">
                                ABS
                            </x-car-specification>
                            <x-car-specification :value="$carDetails->features->air_conditioning">
                                Air Conditioning
                            </x-car-specification>
                            <x-car-specification :value="$carDetails->features->power_windows">
                                Power Windows
                            </x-car-specification>
                            <x-car-specification :value="$carDetails->features->power_door_locks">
                                Power Door Locks
                            </x-car-specification>
                            <x-car-specification :value="$carDetails->features->cruise_control">
                                Cruise Control
                            </x-car-specification>
                            <x-car-specification :value="$carDetails->features->bluetooth_connectivity">
                                Bluetooth Connectivity
                            </x-car-specification>
                            <x-car-specification :value="$carDetails->features->remote_start">
                                Remote Start
                            </x-car-specification>
                            <x-car-specification :value="$carDetails->features->gps_navigation">
                                GPS Navigation
                            </x-car-specification>
                            <x-car-specification :value="$carDetails->features->heated_seats">
                                Heated Seats
                            </x-car-specification>
                            <x-car-specification :value="$carDetails->features->climate_control">
                                Climate Control
                            </x-car-specification>
                            <x-car-specification :value="$carDetails->features->rear_parking_sensors">
                                Rear Parking Sensors
                            </x-car-specification>
                            <x-car-specification :value="$carDetails->features->leather_seats">
                                Leather Seats
                            </x-car-specification>
                        </ul>
                    </div>
                </div>
                <div class="car-details card">
                    <div class="flex items-center justify-between">
                        <p class="car-details-price">${{ $carDetails->price }}</p>
                        <button class="btn-heart">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" style="width: 20px">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                        </button>
                    </div>

                    <hr />
                    <table class="car-details-table">
                        <tbody>
                            <tr>
                                <th>Maker</th>
                                <td>{{ $carDetails->maker->name }}</td>
                            </tr>
                            <tr>
                                <th>Model</th>
                                <td>{{ $carDetails->model->name }}</td>
                            </tr>
                            <tr>
                                <th>Year</th>
                                <td>{{ $carDetails->year }}</td>
                            </tr>
                            <tr>
                                <th>Vin</th>
                                <td>{{ $carDetails->vin }}</td>
                            </tr>
                            <tr>
                                <th>Mileage</th>
                                <td>{{ $carDetails->mileage }}</td>
                            </tr>
                            <tr>
                                <th>Car Type</th>
                                <td>{{ $carDetails->carType->name }}</td>
                            </tr>
                            <tr>
                                <th>Fuel Type</th>
                                <td>{{ $carDetails->fuelType->name }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr />

                    <div class="flex gap-1 my-medium">
                        <img src="/img/avatar.png" alt="" class="car-details-owner-image" />
                        <div>
                            <h3 class="car-details-owner">{{ $carDetails->user->name }}</h3>
                            <div class="text-muted">{{ $carDetails->user->cars->count() }} cars</div>
                        </div>
                    </div>
                    <a href="tel:{{ $carDetails->user->phone   }}" class="car-details-phone">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" style="width: 16px">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
                        {{  Str::mask($carDetails->user->phone, "*", -3) }}
                        <!-- +995557123*** -->
                        <span class="car-details-phone-view">view full number</span>
                    </a>
                </div>
            </div>
        </div>
    </main>

</x-app-layout>