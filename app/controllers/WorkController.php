<?php

namespace App\Controllers;
use App\App;
use App\Models\Work;

class WorkController
{
    protected $db;

    public function __construct()
    {
        $this->db = App::get('db');
    }

    public  function index()
    {
        $works = $this->db->selectAll('works', Work::class);
        $title = 'Works';

        return view('works.index', compact('works', 'title'));
    }

    public  function calendar()
    {
        $result = [];
        $works = $this->db->selectAll('works', Work::class);
        foreach ($works as $work){
            $feed =[];
            $feed['title'] = $work->name;
            $feed['start'] = $work->start_date;
            $feed['end'] = $work->end_date;
            $result[] = $feed;
        }

        echo json_encode($result);
    }

    public  function store()
    {
        // only get specific keys and remove all NULL values
        $paramsNeeded = ['name', 'status', 'start_date', 'end_date'];
        $params  = array_filter($_POST, function($key) use ($paramsNeeded) {
            return in_array($key, $paramsNeeded) && $_POST[$key] !== null ;
            },
            ARRAY_FILTER_USE_KEY
        );
        // Save the work.
        try {
           // filter data from Injection attacks
            $this->db->insert('works', filter($params));
        }
        catch (Exception $e) {
            require "views/500.php";
        }

        // Redirect to tasks.
        return redirect('works');
    }

    public function update()
    {
        $id = $_POST['id'];
        // only get specific keys and remove all NULL values
        $paramsNeeded = ['name', 'status', 'start_date', 'end_date'];
        $params  = array_filter($_POST, function($key) use ($paramsNeeded) {
            return in_array($key, $paramsNeeded) && $_POST[$key] !== null ;
        },
            ARRAY_FILTER_USE_KEY
        );
        // Update the work.
        try {
            // filter data from Injection attacks
            $this->db->update('works', filter($params), intval($id));
        }
        catch (Exception $e) {
            require "views/500.php";
        }

        // Redirect to tasks.
        return redirect('works');
    }

    public function destroy()
    {
        $id = $_POST['id'];
        // Delete the work.
        try {
            $this->db->delete('works',  intval($id));
        }
        catch (Exception $e) {
            require "views/500.php";
        }
        // Redirect to tasks.
        return redirect('works');
    }
}