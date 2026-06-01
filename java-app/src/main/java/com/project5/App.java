package com.project5;

import java.time.LocalDateTime;

public class App {
    public static String getMessage() {
        return "Hello from Java EC2 Auto Scaling App! Time: " + LocalDateTime.now();
    }
}