
                            {!! csrf_field() !!}

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                        {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
                                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                        {!! Form::label('price', 'Price', ['class' => 'control-label']) !!}
                                                        {!! Form::text('price', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    {!! Form::label('stock', 'Stock', ['class' => 'control-label']) !!}
                                                        {!! Form::text('stock', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    {!! Form::label('size', 'Size', ['class' => 'control-label']) !!}
                                                        {!! Form::text('size', null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    {!! Form::label('category', 'Category', ['class' => 'control-label']) !!}
                                                        {!! Form::select('category', [
                                                        'Fashion Pria' => 'Fashion Pria',
                                                        'Fashion Wanita' => 'Fashion Wanita',
                                                        'Kids Fashion' => 'Fashion Kids',
                                                        'Busana Muslim' => 'Busana Muslim',
                                                        'Bayi' => 'Bayi',
                                                        'Kaos' => 'Kaos',
                                                        'Sweater' => 'Sweater',
                                                        'Jaket' => 'Jaket',
                                                        'Sepatu/Sandal' => 'Sepatu/Sandal',
                                                        'Pakaian Dalam' => 'Pakaian Dalam'
                                                        ], null, ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Product Description</label>
                                                    <div class="form-group label-floating">
                                                        {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
                                                        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}

                                                    </div>
                                                </div>
                                            </div>
                                        </div>