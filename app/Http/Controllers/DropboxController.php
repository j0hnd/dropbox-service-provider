<?php

namespace App\Http\Controllers;

//use League\Flysystem\Filesystem;
//use Spatie\Dropbox\Client;
//use Spatie\FlysystemDropbox\DropboxAdapter;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;


class DropboxController extends Controller
{
    public function index()
	{
		try {

			// client to connect to dropbox
//			$client = new Client(env('DROPBOX_TOKEN'));

			// flysystem adapter for dropbox
//			$adapter = new DropboxAdapter($client);

			// allows you to easily swap out a local filesystem for a remote one
//			$filesystem = new Filesystem($adapter);

			// get file content
//			$file = fopen(public_path('img/background.jpg'), 'rb');

			// filename to use when the file is uploaded
//			$dropbox_filename = '/Dettlaff/bg.jpg';

			// upload the file in dropbox
//			$uploaded = $filesystem->put($dropbox_filename, $file, []);
//			dd($uploaded);

			$dropbox_folder = 'Dettlaff';
			$filename = 'background.jpg';

			// manually specify a file name
//			Storage::putFileAs($dropbox_folder, new File(public_path('img/background.jpg')), $filename);

			// automatically generate a unique ID for file name
			Storage::putFile($dropbox_folder, new File(public_path('img/background.jpg')));

		} catch (\Exception $e) {
			dd($e);

		}
	}
}
