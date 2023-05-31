<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='rtl'></x-navbars.sidebar>
    
    <main class="main-content position-relative max-height-vh-200 h-200 border-radius-lg ">
                <x-navbars.navs.auth titlePage="rtl"></x-navbars.navs.auth>



                <div class="container p-4">
                    <div class="row justify-content-center">
                      <div class="col-lg-6">
                        <div class="card">
                          <div class="card-header bg-primary ">
                            <h2 class="text-center text-white mb-0">List of Downloaded PDF Files</h2>
                          </div>
                          <ol class="list-group list-group-flush">
                            @foreach ($pdfs as $pdf)
                              <li class="fa fa-file-pdf-o list-group-item p-3">
                                <a href="{{ Storage::url($pdf) }}" class="font-weight-bold text-decoration-none">{{ basename($pdf) }}</a>
                              </li>
                            @endforeach
                          </ol>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                










            </x-layout> 
