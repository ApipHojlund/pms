<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Document Content</div>

                <div class="card-body">
                    <!-- Display document content here -->
                    {{-- <iframe src="{{ asset('model/' . $order->model) }}"></iframe> --}}
                    {{-- <iframe
                        src="https://drive.google.com/viewerng/viewer?embedded=true&url=http://infolab.stanford.edu/pub/papers/google.pdf#toolbar=0&scrollbar=0"
                        frameBorder="0"
                        scrolling="auto"
                        height="100%"
                        width="100%"
                    ></iframe> --}}
                    <iframe
                        src="{{ asset('model/' . $order->model) }}"
                        frameBorder="0"
                        scrolling="auto"
                        height="100%"
                        width="100%"
                    ></iframe>
                    {{-- <embed src="{{ asset('model/' . $order->model) }}" type="application/pdf"   height="300px" width="100%" class="responsive"> --}}
                </div>
            </div>
        </div>
    </div>
</div>
