<html>

<head>
    <title>array</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 mt-5">
                <div class="card">

                    <div class="card-body">
                        <form method="post" action="{{ route('postData') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">VID<span class="text-danger">*</span></label>
                                <select name="vid[]" id="vid" class="w-100 form-control required autofocus">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="name">CGM-ID<span
                                        class="text-danger">*</span></label>
                                <input value="{{ old('name') }}" type="text"
                                    class="form-control @error('name') is-invalid @enderror "
                                    name="cgmid" placeholder="CGM-ID" required autofocus>
                                @if ($errors->has('name'))
                                    <span
                                        class="text-danger text-left">{{ $errors->first('name') }}</span>
                                @endif
                            </div>



                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="name">Area <span
                                        class="text-danger">*</span></label>
                                <input value="{{ old('name') }}" type="text"
                                    class="form-control @error('name') is-invalid @enderror "
                                    name="area" placeholder="Area " required autofocus>
                                @if ($errors->has('name'))
                                    <span
                                        class="text-danger text-left">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="name">Survey No.<span
                                        class="text-danger">*</span></label>

                                <input value="{{ old('name') }}" type="text"
                                    class="form-control @error('name') is-invalid @enderror "
                                    name="surveyno" placeholder="Survey No." required autofocus>
                                @if ($errors->has('name'))
                                    <span
                                        class="text-danger text-left">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label><strong>Description :</strong></label>
                                <textarea class="ckeditor form-control" name="description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="name">District<span
                                        class="text-danger">*</span></label>
                                        <select name="District[]" id="District" class="w-100 form-control required autofocus" placeholder="jddh">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="name">Sub District<span
                                        class="text-danger">*</span></label>
                                        <select name="subdistrict[]" id="" class="w-100 form-control required autofocus" placeholder="jddh">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>

                            </div>
                            <div class="form-group">
                                <label for="name">Village / Town<span
                                        class="text-danger">*</span></label>
                                        <select name="villageortown" id="" class="w-100 form-control required autofocus" placeholder="jddh">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>

                            </div>
                            <div class="form-group">
                                <label for="name">Mineral <span
                                        class="text-danger">*</span></label>
                                        <select name="mineral" id="" class="w-100 form-control required autofocus" placeholder="jddh">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>

                            </div>
                            <div class="form-group">
                                <label><strong>Select Category :</strong></label><br />
                                <select class="form-control" name="cat[]" multiple="">
                                    <option value="php">PHP</option>
                                    <option value="react">React</option>
                                    <option value="jquery">JQuery</option>
                                    <option value="javascript">Javascript</option>
                                    <option value="angular">Angular</option>
                                    <option value="vue">Vue</option>
                                </select>
                            </div>

                            <div class="text-center" style="margin-top: 10px;">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
