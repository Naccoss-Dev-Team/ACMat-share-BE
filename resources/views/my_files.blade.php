@extends('layouts.app')
@push('addon-scripts')
    <script>
        $(document).ready(function() {
            $('#material-modal').on('show.bs.modal', function (event) {
                // event.preventDefault()
                var button = $(event.relatedTarget)
                var recipient = button.data('whatever')
                var post_title = button.data('file')
                var materialUrl = button.data('materialsurl')
                let download    = button.data('download')
{{--                var materialUrl = '{{route('materials', $folder->id)}}'--}}
                var delete_form = $('#delete-form')
                var message = 'Hello! download this amazing material and share';

                console.log('me', materialUrl)
                console.log('me', download)
                // delete_form.attr('action', deleteUrl)
                var modal = $(this)
                modal.find('.modal-title').text(post_title)
                let btn =  modal.find('#download')
                btn[0].href = download
                console.log(btn)
                let twitter = modal.find('#twitter');
                let whatsapp = modal.find('#whatsapp');
                let facebook = modal.find('#facebook');
                (function (message, materialUrl){
                    twitter.on('click', function(){
                        // this.message = message;
                        openShareWindow('twitter', materialUrl, message)
                    });
                    whatsapp.on('click', function(){
                        // this.message = message;
                        openShareWindow('whatsapp', materialUrl, message)
                    });
                    facebook.on('click', function(){
                        // this.message = message;
                        openShareWindow('facebook', materialUrl, message)
                    });
                })(message, materialUrl);

                // openShareWindow(network, type, url, message)
            })
            $('.model-animation-btn').on('click', function(br) {
                $('.modal .modal-dialog').attr('chomelass', 'modal-dialog  ' + $(this).data("animation") + '  animated');
            });
        });

        function selectNetworkFullUrl(network){
            let networkUrls =  {
                facebook: 'https://www.facebook.com/sharer/sharer.php?u=',
                whatsapp: 'https://api.whatsapp.com/send?text=',
                twitter: 'https://twitter.com/intent/tweet?text=',
            };
            if (network === 'facebook') {
                return networkUrls.facebook + encodeURIComponent(this.url) + `&title=${encodeURIComponent(this.message)}`;
            }
            if (network === 'twitter') {
                return networkUrls.twitter + encodeURIComponent(this.message) + `&url=${encodeURIComponent(this.url)}`;
            }
            if (network === 'whatsapp') {
                return networkUrls.whatsapp + `${this.message} \n ${this.url}`;
            }
        }



        function openShareWindow(network, url, message) {
            let config = {
                popupTop: 0,
                popupLeft: 0,
                popupWindow: undefined,
                popupInterval: null,
                popup: {
                    width: 626,
                    height: 436
                }
            }
            let networkUrls =  {
                facebook: 'https://www.facebook.com/sharer/sharer.php?u=',
                whatsapp: 'https://api.whatsapp.com/send?text=',
                twitter: 'https://twitter.com/intent/tweet?text=',
            };

            if (network === 'facebook') {
                network =  networkUrls.facebook + encodeURIComponent(url) + `&title=${encodeURIComponent(message)}`;
            }
            if (network === 'twitter') {
                network = networkUrls.twitter + encodeURIComponent(message) + `&url=${encodeURIComponent(url)}`;
            }
            if (network === 'whatsapp') {
                network = networkUrls.whatsapp + `${message} \n ${url}`;
            }
            console.log('network', network)
            // resizePopup();
            const width = window.innerWidth || (document.documentElement.clientWidth || window.screenX)
            const height = window.innerHeight || (document.documentElement.clientHeight || window.screenY)
            const systemZoom = width / window.screen.availWidth

            config.popupLeft = (width - config.popup.width) / 2 / systemZoom + (window.screenLeft !== undefined ? window.screenLeft : window.screenX)
            config.popupTop = (height - config.popup.height) / 2 / systemZoom + (window.screenTop !== undefined ? window.screenTop : window.screenY)
            // If a popup window already exist, we close it and trigger a change event.
            if (config.popupWindow && config.popupInterval) {
                clearInterval(config.popupInterval)
                // Force close (for Facebook)
                config.popupWindow.close()
                this.emit('change')
            }
            window.open(
                network,
                `${network}-share-dialog`,
                ',height=' + config.popup.height +
                ',width=' + config.popup.width +
                ',left=' + config.popupLeft +
                ',top=' + config.popupTop +
                ',screenX=' + config.popupLeft +
                ',screenY=' + config.popupTop
            );
            return false;
        }
    </script>
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-block card-stretch card-transparent">
                <div class="card-header d-flex justify-content-between pb-0">
                    <div class="header-title">
                        <h4 class="card-title">Materials</h4>
                    </div>
                    <div class="card-header-toolbar d-flex align-items-center">

                    </div>
                </div>
            </div>
        </div>

        @foreach($materials as $material)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body image-thumb">
                        <div class="mb-4 text-center p-3 rounded iq-thumb">
                            <div class="iq-image-overlay"></div>
                            {{--                            @todo check for file type and render correct file image--}}
                            {{--                            <download></download>--}}
                            <a href="#"  data-file="{{$material->name}}"
                               data-materialsurl="{{route('download_window', $material->id)}}"
                               data-download="{{route('download', $material->id)}}"
                               data-url="{{$material->url}}" data-toggle="modal"
                               data-target="#material-modal" >
                                <img src="../assets/images/layouts/page-1/pdf.png" class="img-fluid" alt="image1"></a>
                        </div>
                        <h6>{{$material->name}}</h6>
                    </div>
                </div>
            </div>
        @endforeach
    </div>



    <!--Delete Modal -->
    <div class="modal fade" id="material-modal" tabindex="-1" role="dialog" aria-labelledby="material-modal-label" aria-hidden="true">
        <div class="modal-dialog" role="">
            <div class="modal-content">
                <div class="modal-header bg-primary border-0">
                    <h5 class="modal-title text-white" id="material-modal-label">Name</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="mt-2">&nbsp;</div>
                <div class="text justify-text-center text-justify"">
                <span class="ml-5">&nbsp;</span><p class="text-muted text-justify ml-5">Share to social Media For Friends</p>
            </div>
            {{--                <div class="d-flex ml-3 mb-3 w-25 justify-content-between">--}}
            <div class="row">
                <div class="col-4">
                    <div class="container">
                        <a href="#" class="ml-5" id="twitter">
                            <svg width="40" height="40" viewBox="0 0 31 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.6773 2.96132C29.823 4.2361 28.775 5.32279 27.5331 6.22139C27.5454 6.46239 27.5515 6.73479 27.5515 7.03857C27.5515 8.72645 27.3062 10.4164 26.8156 12.1083C26.325 13.8003 25.5757 15.4198 24.5675 16.9669C23.5593 18.514 22.3584 19.8845 20.9648 21.0786C19.5711 22.2727 17.8959 23.2248 15.9391 23.9349C13.9823 24.645 11.8851 25 9.64754 25C6.15548 25 2.93963 24.0542 0 22.1627C0.521749 22.2209 1.02215 22.2501 1.5012 22.2501C4.41854 22.2501 7.02419 21.3486 9.31815 19.5456C7.95792 19.5206 6.73974 19.1005 5.6636 18.2854C4.58745 17.4703 3.84688 16.4287 3.44187 15.1607C3.84219 15.2372 4.2373 15.2755 4.62719 15.2755C5.18841 15.2755 5.74065 15.202 6.28389 15.0552C4.83228 14.7635 3.62804 14.0382 2.67118 12.8792C1.71435 11.7202 1.23594 10.3825 1.23594 8.86609V8.78794C2.12694 9.28288 3.07734 9.54614 4.08713 9.57774C3.22721 9.00261 2.54542 8.25262 2.04176 7.32777C1.53807 6.40292 1.28622 5.40207 1.28622 4.32522C1.28622 3.18951 1.5699 2.13194 2.13725 1.15252C3.71586 3.09597 5.62867 4.64924 7.87568 5.81232C10.1227 6.97542 12.5334 7.62137 15.1076 7.75017C14.9978 7.29112 14.9428 6.81208 14.9426 6.31304C14.9426 4.57061 15.5573 3.08283 16.7865 1.8497C18.0158 0.616566 19.4989 0 21.2357 0C23.0541 0 24.5858 0.664258 25.8307 1.99277C27.2531 1.71012 28.5849 1.19888 29.8261 0.45905C29.3479 1.96888 28.4264 3.13361 27.0617 3.95325C28.316 3.80371 29.5212 3.47307 30.6772 2.96132H30.6773Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container">
                        <a href="#" class="ml-4" id="whatsapp">
                            <svg width="40" height="40" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.1943 5.7811C19.4442 -0.000191109 11.7879 -1.71895 5.85038 1.87482C0.0690834 5.4686 -1.80593 13.2812 1.9441 19.0625L2.2566 19.5312L1.00659 24.2187L5.69413 22.9687L6.16288 23.2812C8.19415 24.375 10.3817 25 12.5692 25C14.9129 25 17.2567 24.375 19.288 23.125C25.0693 19.375 26.788 11.7186 23.1943 5.7811ZM19.913 17.8124C19.288 18.75 18.5067 19.375 17.413 19.5312C16.788 19.5312 16.0067 19.8437 12.8817 18.5937C10.2254 17.3437 8.03789 15.3124 6.47538 12.9687C5.53788 11.8749 5.06912 10.4686 4.91287 9.06238C4.91287 7.81237 5.38162 6.71861 6.16288 5.93736C6.47538 5.62485 6.78789 5.4686 7.10039 5.4686H7.88164C8.19415 5.4686 8.50665 5.4686 8.6629 6.09361C8.9754 6.87486 9.75666 8.74988 9.75666 8.90613C9.91291 9.06238 9.91291 9.37488 9.75666 9.53113C9.91291 9.84363 9.75666 10.1561 9.60041 10.3124C9.44416 10.4686 9.2879 10.7811 9.13165 10.9374C8.81915 11.0936 8.6629 11.4061 8.81915 11.7186C9.44415 12.6562 10.2254 13.5937 11.0067 14.3749C11.9442 15.1562 12.8817 15.7812 13.9754 16.2499C14.2879 16.4062 14.6004 16.4062 14.7567 16.0937C14.9129 15.7812 15.6942 14.9999 16.0067 14.6874C16.3192 14.3749 16.4755 14.3749 16.788 14.5312L19.288 15.7812C19.6005 15.9374 19.913 16.0937 20.0692 16.2499C20.2255 16.7187 20.2255 17.3437 19.913 17.8124Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container">

                        <a href="#" id="facebook">
                            <svg width="40" height="40" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.56484 0C2.03612 0 0 2.03612 0 4.56484V20.4351C0 22.9639 2.03612 25 4.56484 25H13.1664V15.2265H10.582V11.7078H13.1664V8.70156C13.1664 6.33969 14.6934 4.17109 18.2109 4.17109C19.6351 4.17109 20.6883 4.30782 20.6883 4.30782L20.6054 7.59376C20.6054 7.59376 19.5314 7.58361 18.3593 7.58361C17.0909 7.58361 16.8875 8.16806 16.8875 9.13831V11.7078H20.7062L20.5398 15.2266H16.8875V25H20.4351C22.9638 25 24.9999 22.9639 24.9999 20.4352V4.56487C24.9999 2.03615 22.9638 2.5e-05 20.4351 2.5e-05H4.56482L4.56484 0Z" fill="black"/>
                            </svg>
                        </a>

                    </div>
                </div>
            </div>

            <div class="mt-2">&nbsp;</div>
            <div class="row">
                <div class="col-12">
                    <a href="#" id="download" class="w-100 btn btn-primary">Download</a>
                </div>
            </div>


            {{--                </div>--}}

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Exit</button>
                {{--                <button type="submit" class="btn btn-danger">Delete</button>--}}
            </div>
        </div>
    </div>
    </div>
@endsection
