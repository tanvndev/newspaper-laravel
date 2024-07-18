<div class="card mb-3 card-create">
    <div class="card-header py-3 bg-transparent border-bottom-0">
        <h6 class="mb-0 fw-bold ">{{__('messages.contactInfo')}}</h6>
        <small>{{__('messages.noteNotice')[0]}} <span class="text-danger">(*)</span>
            {{__('messages.noteNotice')[1]}}</small>
    </div>
    <div class="card-body">
        <div class="row g-3 align-items-center">
            <div class="col-md-12">
                {!! Form::label('phone', __('messages.phone'), ['class' => 'form-label']) !!}
                {!! Form::text('phone', old('phone', $user->phone ?? ''), ['class' => 'form-control', 'type' => 'tel'])
                !!}
            </div>
            <div class="col-md-12">
                {!! Form::label('address', __('messages.address'), ['class' => 'form-label']) !!}
                {!! Form::text('address', old('address', $user->address ?? ''), ['class' => 'form-control']) !!}
            </div>
            <div class="col-md-12">
                {!! Form::label('description', __('messages.notes'), ['class' => 'form-label']) !!}
                {!! Form::text('description', old('description', $user->description ?? ''), ['class' => 'form-control'])
                !!}
            </div>


        </div>
    </div>
</div>