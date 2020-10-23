@section('site_name',' | Edit settings')
@extends('dashboard.layouts._app')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')  }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('settings.index')  }}">Settings</a></li>
                <li class="breadcrumb-item"><a href="#"> <i class="fa fa-edit"></i> Edit settings</a></li>

            </ol>
        </nav>

        <form method="post" action="{{ route('settings.update',sitesettings()->id)  }}" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
        <div class="row">

            <div class="col-lg-6">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{{ sitesettings()->site_name ? 'Site name : '. sitesettings()->site_name:''  }}</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="site_name">site name:</label>
                            <input type="text"  class="form-control" placeholder="Type site name.." value="{{ sitesettings()->site_name?:''  }}" name="site_name" id="site_name">
                            <strong id="text-site_name"></strong>
                        </div>
                        <div class="form-group">
                            <label for="tags">Keywords:</label>
                            <input type="text"  class="form-control" placeholder="Type site keywords.." value="{{ sitesettings()->keywords?:''  }}" name="keywords" id="keywords">

                            <strong id="text-keywords"></strong>
                        </div>

                      <div class="form-group">
                            <label for="description">Descriptions:</label>
                            <textarea  class="form-control" placeholder="Type site descriptions.."  rows="8" cols="80" name="description" id="description">{{ sitesettings()->description?:''  }}</textarea>
                            <strong id="text-description"></strong>
                        </div>
          <div class="form-group">
                            <label for="message_maintenance">Message maintenance:</label>
                            <textarea  class="form-control" placeholder="Type site message maintenance.."  rows="8" cols="80" name="message_maintenance" id="message_maintenance">{{ sitesettings()->message_maintenance?:''  }}</textarea>
                            <strong id="text-message_maintenance"></strong>
                        </div>




                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{{ sitesettings()->email ? 'E-mail : '. sitesettings()->email:''  }}</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">

                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="text"  class="form-control" placeholder="Type email address.." value="{{ sitesettings()->email?:''  }}" name="email" id="email">
                            <strong id="text-email"></strong>
                        </div>
                        <div class="form-group">
                            <label for="adress">Address:</label>
                            <input type="text"  class="form-control" placeholder="Type Address.." value="{{ sitesettings()->adress?:''  }}" name="adress" id="adress">
                            <strong id="text-adress"></strong>
                        </div>
                       <div class="form-group">
                            <label for="head_office">Head Office:</label>
                            <input type="text"  class="form-control" placeholder="Type Head Office.." value="{{ sitesettings()->head_office?:''  }}" name="head_office" id="head_office">
                            <strong id="text-head_office"></strong>
                        </div>
                      <div class="form-group">
                            <label for="facebook">Facebook:</label>
                            <input type="text"  class="form-control" placeholder="Put facebook link account.." value="{{ sitesettings()->facebook?:''  }}" name="facebook" id="facebook">
                            <strong id="text-facebook"></strong>

                          <div class="custom-control custom-checkbox small">
                              <input type="checkbox" class="custom-control-input" value="1"  {{ sitesettings()->facebook_status == 1?'checked':'' }} id="facebook_status" name="facebook_status">
                              <label class="custom-control-label" for="facebook_status">Visiblity</label>
                          </div>
                        </div>                      <div class="form-group">
                            <label for="twitter">Twitter:</label>
                            <input type="text"  class="form-control" placeholder="Put twitter link account.." value="{{ sitesettings()->twitter?:''  }}" name="twitter" id="twitter">
                            <strong id="text-twitter"></strong>

                          <div class="custom-control custom-checkbox small">
                              <input type="checkbox" class="custom-control-input" value="1"  {{ sitesettings()->twitter_status == 1?'checked':'' }} id="twitter_status" name="twitter_status">
                              <label class="custom-control-label" for="twitter_status">Visiblity</label>
                          </div>
                        </div>                      <div class="form-group">
                            <label for="instagram">Instagram:</label>
                            <input type="text"  class="form-control" placeholder="Put instagram link account.." value="{{ sitesettings()->instagram?:''  }}" name="instagram" id="instagram">
                            <strong id="text-instagram"></strong>

                          <div class="custom-control custom-checkbox small">
                              <input type="checkbox" class="custom-control-input" value="1"  {{ sitesettings()->instagram_status == 1?'checked':'' }} id="instagram_status" name="instagram_status">
                              <label class="custom-control-label" for="instagram_status">Visiblity</label>
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="linkedin">Linkedin:</label>
                            <input type="text"  class="form-control" placeholder="Put linkedin link account.." value="{{ sitesettings()->linkedin?:''  }}" name="linkedin" id="linkedin">
                            <strong id="text-linkedin"></strong>

                          <div class="custom-control custom-checkbox small">
                              <input type="checkbox" class="custom-control-input" value="1"  {{ sitesettings()->linkedin_status == 1?'checked':'' }} id="linkedin_status" name="linkedin_status">
                              <label class="custom-control-label" for="linkedin_status">Visiblity</label>
                          </div>
                        </div>
   <div class="form-group">
                            <label for="vk">VK:</label>
                            <input type="text"  class="form-control" placeholder="Put vk link account.." value="{{ sitesettings()->vk?:''  }}" name="vk" id="vk">
                            <strong id="text-vk"></strong>

                          <div class="custom-control custom-checkbox small">
                              <input type="checkbox" class="custom-control-input" value="1"  {{ sitesettings()->vk_status == 1?'checked':'' }} id="vk_status" name="vk_status">
                              <label class="custom-control-label" for="vk_status">Visiblity</label>
                          </div>
                        </div>

                          </div>

                </div>
            </div>
            <div class="col-lg-2">
                <div class="card shadow mb-4">
                      <div class="card-body">
                <div class="form-group">
                    <label for="head_office">Status:</label>
                   <select class="form-control" name="status" id="status">
                       <option value="1" {{sitesettings()->status == 1 ? 'selected':''}}>OPEN</option>
                       <option value="0" {{sitesettings()->status == 0 ? 'selected':''}}>CLOSED</option>
                   </select>
                <br />


                </div>
                          <button type="submit"  class="btn btn-info">
                    <span class="icon text-white-50">
                      <i class="fas fa-edit"></i>
                    </span>
                              <span class="text">Update</span>
                          </button>

                    <!-- Card Header - Accordion -->

                    <!-- Card Content - Collapse -->

                </div>
            </div></div>

        </div>
        </form>
    </div>
@endsection
