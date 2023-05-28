@if(session('alert'))
    @if (session('type') == 'failed')
    <div class="container fixed-top">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="alert alert-danger">
                    {{ session('alert') }}
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="container fixed-top">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="alert alert-success">
                    {{ session('alert') }}
                </div>
            </div>
        </div>
    </div>
    @endif

    
    <script>
        setTimeout(function() {
            $('.alert').fadeOut('slow');
        }, 3000);
    </script>
@endif