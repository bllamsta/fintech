@extends("layouts.app")

<?php
$page = 'Top Up';
?>

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body">
                <div class="container">
                    <form>
                        <div class="mb-3">
                            <label for="topup" class="form-label">Top Up here!</label>
                            <input type="number" class="form-control" id="topup" name="balance">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection