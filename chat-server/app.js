const express = require("express")
const { WebSocketServer } = require("ws")
const app = express()

  const wss = new WebSocketServer({ port: 5500 })

  wss.broadcast = (message) => {
    wss.clients.forEach((client) => {
      client.send(message);
    });
  };

  wss.on("connection", (ws, request) => {
    ws.on("message", (data) => {
      wss.broadcast(data.toString());
    });
});
  