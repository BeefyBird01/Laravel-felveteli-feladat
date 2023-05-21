@if(session('alert'))
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="alert alert-success">
                    {{ session('alert') }}
                </div>
            </div>
        </div>
    </div>
    <script>
        setTimeout(function() {
            $('.alert').fadeOut('slow');
        }, 3000);
    </script>
@endif