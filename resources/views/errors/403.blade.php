@extends('errors::minimal')

@section('title', __('Permission Error!'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'You don\'t have Permission for this action!'))
