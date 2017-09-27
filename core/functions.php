<?php

function base_path() {
	return $_SERVER[ 'DOCUMENT_ROOT' ].'/';
}

function views_directory() {
	return $_SERVER[ 'DOCUMENT_ROOT' ].'/views/';
}

function src_directory() {
	return $_SERVER[ 'DOCUMENT_ROOT' ].'/src/';
}

function core_directory() {
	return $_SERVER[ 'DOCUMENT_ROOT' ].'/core/';
}