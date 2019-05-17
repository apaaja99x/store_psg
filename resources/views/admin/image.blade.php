<div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="#pablo">
                                        <img class="img" width="100%" src="{{ asset('image/'.$product->picture)}}" id="showgambar" style="max-width: 100%;max-height:100%;" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="category text-gray">Image</h6>
                                    <h4 class="card-title">Image of Product</h4>
                                    <p class="card-content">
                                        Featured image upload here(required).
                                    </p>
                                    <!--<a href="#pablo" class="btn btn-primary btn-round">Follow</a>-->
                                    <a>
                                        <input style="width:100%;" type="file" id="inputgambar" name="gambar" class="btn btn-primary btn-round" value="Upload/Choose" required="">
                                    </a>
                                </div>
                            </div>