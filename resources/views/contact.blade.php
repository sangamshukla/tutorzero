@extends('layouts.app')
@section('content')
<section id="home" class="hero-section relative bg-no-repeat bg-top z-10"
    style="background-image: url('{{ asset('assets/img/hero/hero-bg.svg') }}')">
    <div class="container">
        <div class="row flex items-center relative">
            <div class="w-full lg:w-1/2">
                <div class="hero-content mb-0 lg:mb-6">
                    {{-- <h1 class="text-white mb-9 text-4xl sm:text-5xl md:text-6xl lg:text-5xl xl:text-5xl 2xl:text-6xl">
                        Small minds are the future</h1>
                    <p class="text-white text-lg mb-10 xl:pr-18 2xl:pr-120">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    </p>
                    <a href="javascript:void(0)" class="main-btn border-btn btn-hover mb-2 hover:bg-white">Get
                        Started</a>
                    <a href="#features" class="scroll-bottom"> <i class="lni lni-arrow-down"></i></a> --}}

                    {{-- <img src="{{ asset('assets/img/hero/hero-img.png') }}" alt="" class="w-full lg:w-auto"> --}}
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="mt-16 w-2/3" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.003 512.003" style="enable-background:new 0 0 512.003 512.003;" xml:space="preserve" width="512" height="512" class=""><g><path style="fill:#707487;" d="M132.422,247.187l-12.775-6.388c-2.99-1.495-4.879-4.551-4.879-7.895V199.68  c0-3.343,1.889-6.4,4.879-7.895l12.775-6.388V247.187z" data-original="#707487"></path><polygon style="fill:#E6AF78;" points="335.446,361.939 335.446,300.15 176.558,300.15 176.558,361.939 256.002,432.556 " data-original="#E6AF78"></polygon><path style="fill:#82BFBC" d="M458.286,390.843l-109.229-25.701c-1.65-0.388-3.167-1.047-4.587-1.846l-88.469,51.607L170.982,360.8  c-2.201,2.072-4.933,3.612-8.036,4.343L53.717,390.844c-15.95,3.753-27.222,17.985-27.222,34.37v69.134  c0,9.751,7.904,17.654,17.654,17.654h423.702c9.751,0,17.654-7.904,17.654-17.654v-69.134  C485.507,408.828,474.235,394.595,458.286,390.843z" data-original="#B4E1FA" class="active-path" data-old_color="#81BDBA"></path><path style="fill:#D29B6E;" d="M176.558,300.15v65.193c100.078,36.057,158.888-54.185,158.888-54.185v-11.009H176.558V300.15z" data-original="#D29B6E"></path><path style="fill:#F0C087;" d="M141.249,97.127l7.692,169.228c0.718,15.809,8.47,30.47,21.13,39.965l36.498,27.374  c9.168,6.875,20.318,10.593,31.778,10.593h35.309c11.46,0,22.61-3.717,31.778-10.593l36.498-27.374  c12.66-9.496,20.412-24.155,21.13-39.965l7.692-169.228C370.753,97.127,141.249,97.127,141.249,97.127z" data-original="#F0C087"></path><path style="fill:#E6AF78;" d="M229.521,132.435c35.309,0,88.271-8.827,100.833-35.309H141.249l7.692,169.228  c0.718,15.809,8.47,30.469,21.131,39.965l36.498,27.374c9.168,6.875,20.318,10.593,31.778,10.593h17.654  c-17.654,0-52.963-35.309-52.963-79.444c0-21.586,0-79.444,0-105.926C203.039,150.089,211.866,132.435,229.521,132.435z" data-original="#E6AF78"></path><g>
                        <path style="fill:#609791" d="M91.3,454.714l-57.199-51.382c-4.793,6.069-7.603,13.706-7.603,21.882v69.134   c0,9.751,7.904,17.654,17.654,17.654h61.79v-24.454C105.941,475.021,100.618,463.084,91.3,454.714z" data-original="#A0D2F0" class="" data-old_color="#A0D2F0"></path>
                        <path style="fill:#609791" d="M420.705,454.714l57.199-51.382c4.793,6.069,7.603,13.706,7.603,21.882v69.134   c0,9.751-7.904,17.654-17.654,17.654h-61.79v-24.454C406.063,475.021,411.386,463.084,420.705,454.714z" data-original="#A0D2F0" class="" data-old_color="#A0D2F0"></path>
                    </g><polygon style="fill:#5B5D6E;" points="278.07,512.001 233.934,512.001 239.451,432.556 272.553,432.556 " data-original="#5B5D6E"></polygon><path style="fill:#515262;" d="M278.07,414.902h-44.136v16.613c0,5.451,4.418,9.869,9.869,9.869H268.2  c5.451,0,9.869-4.418,9.869-9.869v-16.613H278.07z" data-original="#515262"></path><g>
                        <path style="fill:#609791" d="M175.319,342.287l80.684,72.615c0,0-22.596,11.407-50.48,34.398   c-5.752,4.742-14.453,2.821-17.538-3.966l-37.907-83.394l11.992-17.987C165.054,339.473,171.318,338.687,175.319,342.287z" data-original="#A0D2F0" class="" data-old_color="#A0D2F0"></path>
                        <path style="fill:#609791" d="M336.686,342.287l-80.684,72.615c0,0,22.596,11.407,50.48,34.398   c5.752,4.742,14.453,2.821,17.538-3.966l37.907-83.394l-11.992-17.987C346.95,339.473,340.686,338.687,336.686,342.287z" data-original="#A0D2F0" class="" data-old_color="#A0D2F0"></path>
                    </g><path style="fill:#785550;" d="M309.516,38.647l8.275,58.48c37.775,7.555,43.219,66.837,44.003,83.769  c0.142,3.073,1.123,6.04,2.79,8.625l14.413,22.358c0,0-4.933-36.964,17.654-61.79C396.652,150.089,404.408,3.338,309.516,38.647z" data-original="#785550"></path><path style="fill:#694B4B;" d="M149.709,22.831l13.056,8.919c-59.031,43.584-47.998,118.339-47.998,118.339  c17.654,17.654,17.654,61.79,17.654,61.79l17.654-17.654c0,0-6.813-50.998,26.481-70.617c30.895-18.206,57.928-8.827,85.513-8.827  c73.927,0,94.616-27.861,91.03-61.79c-1.856-17.556-28.698-54.126-97.098-52.963C228.397,0.497,176.558,8.855,149.709,22.831z" data-original="#694B4B"></path><path style="fill:#5A4146;" d="M144.559,107.057c0,0-9.379-36.964,18.206-75.306c-59.031,43.584-47.998,118.339-47.998,118.339  c17.654,17.654,17.654,61.79,17.654,61.79l17.654-17.654c0,0-6.813-50.998,26.481-70.617c30.895-18.206,57.928-8.827,85.513-8.827  c12.023,0,22.5-0.805,31.832-2.185C236.969,114.505,203.408,71.38,144.559,107.057z" data-original="#5A4146"></path><path style="fill:#5B5D6E;" d="M145.663,256.014h-13.241c-4.875,0-8.827-3.952-8.827-8.827v-61.79c0-4.875,3.952-8.827,8.827-8.827  h13.241c2.437,0,4.414,1.976,4.414,4.414V251.6C150.076,254.039,148.1,256.014,145.663,256.014z" data-original="#5B5D6E"></path><path style="fill:#464655" d="M291.311,306.77v-13.241c59.743,0,72.824-33.453,72.824-46.342h13.241  C377.375,263.76,361.914,306.77,291.311,306.77z" data-original="#464655" class=""></path><path style="fill:#5B5D6E;" d="M291.311,308.977h-8.827c-4.875,0-8.827-3.952-8.827-8.827l0,0c0-4.875,3.952-8.827,8.827-8.827  h8.827c4.875,0,8.827,3.952,8.827,8.827l0,0C300.138,305.025,296.185,308.977,291.311,308.977z" data-original="#5B5D6E"></path><path style="fill:#707487;" d="M379.582,247.187l12.775-6.388c2.99-1.495,4.879-4.551,4.879-7.895V199.68  c0-3.343-1.889-6.4-4.879-7.895l-12.775-6.388V247.187z" data-original="#707487"></path><path style="fill:#5B5D6E;" d="M366.341,256.014h13.241c4.875,0,8.827-3.952,8.827-8.827v-61.79c0-4.875-3.952-8.827-8.827-8.827  h-13.241c-2.437,0-4.414,1.976-4.414,4.414V251.6C361.928,254.039,363.904,256.014,366.341,256.014z" data-original="#5B5D6E"></path><path style="fill:#609791" d="M370.755,494.346h-61.79c-4.875,0-8.827,3.952-8.827,8.827v8.827h79.444v-8.827  C379.582,498.299,375.629,494.346,370.755,494.346z" data-original="#A0D2F0" class="" data-old_color="#A0D2F0"></path></g> </svg>
</div>
</div>
     <div class="w-full lg:w-1/2">
          <div class="mx-16">
           <h5 class="text-white mb-9 text-3xl sm:text-5xl md:text-6xl lg:text-3xl xl:text-5xl 2xl:text-6xl">
                        Small minds are the future</h5>
                    <p class="text-white text-lg mb-10 xl:pr-18 2xl:pr-120">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    </p>
                </div>
            </div>
            <div>
                <section class="text-gray-600 body-font relative">
                    <div class="container px-5 py-24 mx-auto">
                      <div class="flex flex-col text-center w-full mb-12">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify.</p>
                      </div>
                      <div class="lg:w-1/2 md:w-2/3 mx-auto">
                        <div class="flex flex-wrap -m-2">
                          <div class="p-2 w-1/2">
                            <div class="relative">
                              <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                              <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>
                          <div class="p-2 w-1/2">
                            <div class="relative">
                              <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                              <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>
                          <div class="p-2 w-full">
                            <div class="relative">
                              <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                              <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                          </div>
                          <div class="p-2 w-full">
                            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                          </div>
                          <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                            <a class="text-indigo-500">example@email.com</a>
                            <p class="leading-normal my-5">49 Smith St.
                              <br>Saint Cloud, MN 56301
                            </p>
                            <span class="inline-flex">
                              <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                              </a>
                              <a class="ml-4 text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                </svg>
                              </a>
                              <a class="ml-4 text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                </svg>
                              </a>
                              <a class="ml-4 text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                </svg>
                              </a>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
            </div>
        </div>
    </div>
</section>
@endsection
