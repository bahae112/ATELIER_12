<div class="chat">
    <h2>Chat Room</h2>
    <div class="messages">
        <?php foreach ($messages as $message): ?>
            <div class="message"><?php echo htmlspecialchars($message['message']); ?></div>
        <?php endforeach; ?>
    </div>
    <form action="index.php?controller=chat&action=sendMessage" method="POST">
        <input type="text" name="message" required>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>
