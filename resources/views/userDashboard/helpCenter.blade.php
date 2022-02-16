@extends('layouts.userDashboard')
@section('title')
Help Center
@endsection
@section('header')
 Help Center 
@endsection
@section('content')
 
<div class="min-h-screen bg-white">
    <main>
      <!-- Side-by-side grid -->
      <div class="bg-white">
        <div class="max-w-md px-4 py-24 mx-auto sm:max-w-3xl sm:py-32 sm:px-6 lg:max-w-7xl lg:px-8">
          <div class="divide-y divide-warm-gray-200">
            <section class="lg:grid lg:grid-cols-3 lg:gap-8" aria-labelledby="contact-heading">
              <h2 id="contact-heading" class="text-2xl font-extrabold text-warm-gray-900 sm:text-3xl">
                Get in touch
              </h2>
              <div class="grid grid-cols-1 gap-12 mt-8 sm:grid-cols-2 sm:gap-x-8 sm:gap-y-12 lg:mt-0 lg:col-span-2">
                <div>
                  <h3 class="text-lg font-medium text-warm-gray-900">
                    Technical Support Team
                  </h3>
                  <dl class="mt-2 text-base text-warm-gray-500">
                    <div>
                      <dt class="sr-only">
                        Email
                      </dt>
                      <dd>
                        techsupport@htcr.com
                      </dd>
                    </div>
                    <div class="mt-1">
                      <dt class="sr-only">
                        Phone number
                      </dt>
                      <dd>
                        +1 (876) 772-4577
                      </dd>
                    </div>
                  </dl>
                </div>
  
                <div>
                  <h3 class="text-lg font-medium text-warm-gray-900">
                    Customer Service
                  </h3>
                  <dl class="mt-2 text-base text-warm-gray-500">
                    <div>
                      <dt class="sr-only">
                        Email
                      </dt>
                      <dd>
                        cssupport@htcr.com
                      </dd>
                    </div>
                    <div class="mt-1">
                      <dt class="sr-only">
                        Phone number
                      </dt>
                      <dd>
                        +1 (876) 774-2967
                      </dd>
                    </div>
                  </dl>
                </div>
  
                <div>
                  <h3 class="text-lg font-medium text-warm-gray-900">
                   Report Stolen Vehicle
                  </h3>
                  <dl class="mt-2 text-base text-warm-gray-500">
                    <div>
                      <dt class="sr-only">
                        Email
                      </dt>
                      <dd>
                        emergencysupport@htcr.com
                      </dd>
                    </div>
                    <div class="mt-1">
                      <dt class="sr-only">
                        Phone number
                      </dt>
                      <dd>
                        +1 (876) 774-2567
                      </dd>
                    </div>
                  </dl>
                </div>
  
                <div>
                  <h3 class="text-lg font-medium text-warm-gray-900">
                    Customer Service (Toll Free)
                  </h3>
                  <dl class="mt-2 text-base text-warm-gray-500">
                    <div>
                      <dt class="sr-only">
                        Email
                      </dt>
                      <dd>
                        cssupport@htcr.com
                      </dd>
                    </div>
                    <div class="mt-1">
                      <dt class="sr-only">
                        Phone number
                      </dt>
                      <dd>
                        +1 (888) 775-2800
                      </dd>
                    </div>
                  </dl>
                </div>
              </div>
            </section>
            <section class="pt-16 mt-16 lg:grid lg:grid-cols-3 lg:gap-8" aria-labelledby="location-heading">
              <h2 id="location-heading" class="text-2xl font-extrabold text-warm-gray-900 sm:text-3xl">
                Locations
              </h2>
              <div class="grid grid-cols-1 gap-12 mt-8 sm:grid-cols-2 sm:gap-x-8 sm:gap-y-12 lg:mt-0 lg:col-span-2">
                <div>
                  <h3 class="text-lg font-medium text-warm-gray-900">
                    Cross Road
                  </h3>
                  <div class="mt-2 space-y-1 text-base text-warm-gray-500">
                    <p>27 Halfway Tree Lane</p>
                    <p>Kingston, Jamaica</p>
                  </div>
                </div>
  
                <div>
                  <h3 class="text-lg font-medium text-warm-gray-900">
                    Negril
                  </h3>
                  <div class="mt-2 space-y-1 text-base text-warm-gray-500">
                    <p>77 God Street</p>
                    <p>Kingston, Jamaica</p>
                  </div>
                </div>
  
                <div>
                  <h3 class="text-lg font-medium text-warm-gray-900">
                    Halfway Tree
                  </h3>
                  <div class="mt-2 space-y-1 text-base text-warm-gray-500">
                    <p>70 Thank You Lane</p>
                    <p>St. Thomas, Jamaica</p>
                  </div>
                </div>
  
                <div>
                  <h3 class="text-lg font-medium text-warm-gray-900">
                    Saint Ann
                  </h3>
                  <div class="mt-2 space-y-1 text-base text-warm-gray-500">
                    <p>07 Gods Gift Street</p>
                    <p>St. Ann, Jamaica</p>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </main>
  
    
  </div>
  
@endsection