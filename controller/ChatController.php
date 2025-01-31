<?php
require_once 'models/Chat.php';

class ChatController extends BaseController {
    public function index() {
        $chat = new Chat();
        $messages = $chat->getMessages();
        $this->render('chat/index', ['messages' => $messages]);
    }

    public function sendMessage() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $message = $_POST['message'];
            $chat = new Chat();
            $chat->addMessage($message);
            header('Location: index.php?controller=chat&action=index');
        }
    }
}
?>
