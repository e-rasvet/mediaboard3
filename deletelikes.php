<?php  // $Id: view.php,v 1.2 2012/03/10 22:00:00 Igor Nikulin Exp $


require_once '../../config.php';
require_once 'lib.php';


$id                     = optional_param('id', 0, PARAM_INT); 
$ids                    = optional_param('ids', 0, PARAM_INT); 
$a                      = optional_param('a', 'list', PARAM_TEXT);  
$fileid                 = optional_param('fileid', 0, PARAM_INT);
    
if ($id) {
    if (! $cm = get_coursemodule_from_id('mediaboard', $id)) {
        error('Course Module ID was incorrect');
    }

    if (! $course = $DB->get_record('course', array('id' => $cm->course))) {
        error('Course is misconfigured');
    }

    if (! $mediaboard = $DB->get_record('mediaboard', array('id' => $cm->instance))) {
        error('Course module is incorrect');
    }
} else {
    error('You must specify a course_module ID or an instance ID');
}

require_login($course, true, $cm);

$context = context_module::instance($cm->id);

//add_to_log($course->id, "mediaboard", "deletelikes", "deletelikes.php?id=$cm->id", "$mediaboard->id");


if (!empty($ids)) {
    $DB->delete_records("mediaboard_likes", array("id" => $ids));
    
    $c = 0;
    
    if (!$lists = $DB->get_records_sql ("SELECT id FROM {mediaboard_likes} WHERE fileid = ? ORDER BY time DESC", array($fileid))) {
      foreach ($lists as $list) {
        if (!has_capability('mod/mediaboard:teacher', $context, $list->userid)) 
          $c++;
      }
    }
    
    if ($c == 0)
      redirect("view.php?id={$cm->id}", get_string('noevaluetions', 'mediaboard'));
}


/// Print the page header
$strmediaboards = get_string('modulenameplural', 'mediaboard');
$strmediaboard  = get_string('modulename', 'mediaboard');

$PAGE->set_url('/mod/mediaboard/view.php', array('id' => $id));
    
$title = $course->shortname . ': ' . format_string($mediaboard->name);
$PAGE->set_title($title);
$PAGE->set_heading($course->fullname);

echo $OUTPUT->header();

/// Print the main part of the page

echo html_writer::link(new moodle_url('/mod/mediaboard/view.php', array("id" => $cm->id)), get_string("back", "mediaboard"));

$table = new html_table();
$table->width = "100%";
$table->head  = array(get_string("table3::cell1::student", "mediaboard"), get_string("table3::cell2::peer", "mediaboard"), get_string("table3::cell2", "mediaboard"));
$table->align = array ("left", "center", "center");

$lists = $DB->get_records_sql ("SELECT id, userid FROM {mediaboard_likes} WHERE fileid = ? ORDER BY time DESC", array($fileid));
            
foreach ($lists as $list) {
    $userdata  = $DB->get_record("user", array("id" => $list->userid));
    $picture   = $OUTPUT->user_picture($userdata, array('popup' => true));
    $student   = html_writer::link(new moodle_url('/user/view.php', array("id" => $userdata->id, "course" => $cm->course)), fullname($userdata));
    
    $cell1     = new html_table_cell($picture . " " . $student);
    $cell2     = new html_table_cell(get_string("like", "mediaboard"));
    $cell3     = new html_table_cell(html_writer::link(new moodle_url('/mod/mediaboard/deletelikes.php', array("id" => $id, "a" => "delete", "fileid" => $fileid, "ids" => $list->id)), get_string("delete", "mediaboard"), array("onclick"=>"return confirm('".get_string("confim", "mediaboard")."')")));
    
    $cells = array($cell1, $cell2, $cell3);
    
    $row = new html_table_row($cells);
    
    if (!has_capability('mod/mediaboard:teacher', $context, $list->userid)) 
      $table->data[] = $row;
}

echo html_writer::table($table);

/// Finish the page
echo $OUTPUT->footer();



