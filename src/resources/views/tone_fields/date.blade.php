{!! Form::date($field['name'], $field['value'] ? (!in_array($field['value'], ['0000-00-00', '0000-00-00 00:00:00']) ? strftime('%Y-%m-%d', strtotime($field['value'])) : '') : $field['default'], array_merge(['class' => 'form-control', 'autocomplete' => 'off'], $field['attributes'])) !!}
