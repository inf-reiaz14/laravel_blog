@extends('myapp.layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email">
                    </div>

                    <div class="form-group">
                        <label for="sel1">Select list:</label>
                        <select class="form-control" id="sel1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>

    </div> <!-- /container -->
@endsection
