<x-guest-layout>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Problem Number One</h5>
                        <p class="card-text">We have a set of data in the following url: http://103.219.147.17/api/json.php
                            From this data we need to find the speeds those have crossed 60. The result should contain the list &
                            the total number of speeds those have crossed 60.</p>
                        <a href="{{ route('solve-problem', 1) }}" class="btn btn-primary">Show</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Problem Number Two</h5>
                        <p class="card-text">We have an array like
                            array('0'=>'z1', '1'=>'Z10', '2'=>'z12', '3'=>'Z2', '4'=>'z3')
                            We need to sort this. You can use this given array for your sorted solution.</p>
                        <a href="{{ route('solve-problem', 2) }}" class="btn btn-primary">Show</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Problem Number Three</h5>
                        <p class="card-text">We need to validate any IP address.
                            We are sure that you can write a logic to validate any IP address and return true if valid and false if
                            invalid. We hope to see that you do this without any built-in function.</p>
                        <a href="{{ route('solve-problem', 3) }}" class="btn btn-primary">Show</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
