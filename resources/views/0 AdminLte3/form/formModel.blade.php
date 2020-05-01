<button type="button" class="btn btn-{{ $form->color ?? "primary" }}" data-toggle="modal" data-target=".bd-example-modal-xl{{ $form->id}}">{{ $form->button ?? "Form button" }}</button>

<div class="modal fade bd-example-modal-xl{{ $form->id}}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-{{ $form->size }}" role="document">
        <div class="modal-content">
        <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ $form->title ?? "Form Title" }}</h3>
                </div>

                <form role="form" class="row" action="/{{$form->route}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        @isset($form->input)
                            @foreach ($form->input as $input)
                                @switch($input['type'])
                                    @case('file')
                                        <div class="form-group">
                                            <label>{{ $input['label'] }}</label>
                                            <input type="file" class="{{ $input['class'] }} form-control " value="{{$input['value']}}" name="{{$input['name']}}">
                                        </div>
                                    @break
                                    @case('textaria')
                                        <div class="form-group">
                                            <label>{{ $input['label'] }}</label>
                                            <textarea class="form-control {{ $input['class'] }}" name="{{$input['name']}}" placeholder="{{$input['placeholder']}}">{{$input['value']}}</textarea>
                                        </div>
                                    @break
                                    @case('select')
                                        <div class="form-group">
                                            <label>{{ $input['label'] }}</label>
                                            <select name="{{ $input['name'] }}" class="form-control {{ $input['class'] }}">
                                                @foreach ($input['value'] as $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @break
                                    @default
                                        <div class="form-group">
                                            <label>{{ $input['label'] }}</label>
                                            <input type="{{ $input['type'] }}" name="{{ $input['name']}}" class="form-control {{ $input['class'] }}" placeholder="{{ $input['placeholder'] }}" value="{{ $input['value'] }}">
                                        </div>
                                @endswitch
                            @endforeach
                        @endisset
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
