<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Webify Event Managment</title>
        <link href="{{asset('admin_assets/css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Service Provider Register</h3></div>
                                    @if($errors)
                                  
                                    <div class="row">
                                        {{-- @foreach ($errors->all() as $error)
                                       
                                        <div class="col-12">
                                            <div class="alert alert-danger">{{ $error }}</div>
                                        </div>
                                        @endforeach --}}
                                       
                                    </div>
                                    @endif
                                    <div class="card-body">
                                        <form method="post" action="{{route('serviceprovider.register')}}" enctype="multipart/form-data">
                                            @csrf
                                         <div class="row">
                                            <div class="col-sm-12 col-lg-6 col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control @error('name') is-invalid @enderror" id="inputEmail" type="text" value="{{old('name')}}" name="name" placeholder="John Do" />
                                                    <label for="inputEmail">Full Name</label>
                                                    @error('name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control  @error('phone_no') is-invalid @enderror" id="inputphone" value="{{old('phone_no')}}" type="numbers" name="phone_no"  />
                                                    <label for="inputphone">Phone Number <small>formate (03XXXXXXXXXXX)</small></label>
                                                    @error('phone_no')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control  @error('cnic') is-invalid @enderror" id="cnic" type="numbers" value="{{old('cnic')}}" name="cnic"  />
                                                    <label for="cnic">CNIC Number <small> formate (XXXXX-XXXXXX-X)</small></label>
                                                    @error('cnic')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                </div>
                                               
                                                <label for="proof_document">Document Of Proof</label>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control @error('proof_document') is-invalid @enderror" id="proof_document" type="file" value="{{old('proof_document')}}" name="proof_document" />
                                                    @error('proof_document')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-6 col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control  @error('address') is-invalid @enderror" id="address" type="text" value="{{old('address')}}" name="address"  />
                                                    <label for="address">Address</label>
                                                    @error('address')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control  @error('email') is-invalid @enderror" id="inputEmail" type="email" value="{{old('email')}}" name="email" placeholder="name@example.com" />
                                                    <label for="inputEmail">Email address</label>
                                                    @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control  @error('password') is-invalid @enderror" id="inputPassword" type="password" value="{{old('password')}}" name="password" placeholder="Password" />
                                                    <label for="inputPassword">Password</label>
                                                    @error('password')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                         </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                               
                                            </div>
                                            <div class="text-center mt-4 mb-0">
                                               
                                                <button type="submit" class="btn btn-primary" >Register</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{route('serviceprovider')}}">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Event Managment 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('admin_assets/js/scripts.js')}}"></script>
    </body>
</html>
