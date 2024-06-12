import paho.mqtt.client as mqtt
import json
from datetime import datetime

# MQTT broker connexion configuration
broker = 'mqtt.iut-blagnac.fr'
port = 1883

def get_mqtt_payload(topic):
    
    def on_connect(client, userdata, flags, reason_code, properties):
        print(f"Connected with result code {reason_code}")
        client.subscribe(topic)
        print(f"{topic}")

    def on_message(client, userdata, msg):
        timestamp = datetime.now()
        payload = json.loads(msg.payload.decode())
        print(f"Message received on topic {msg.topic} at {timestamp.time()} : {payload}")
        client.disconnect()

    mqttc = mqtt.Client(mqtt.CallbackAPIVersion.VERSION2)
    mqttc.on_connect = on_connect
    mqttc.on_message = on_message

    mqttc.connect(broker, port, 60)
    mqttc.loop_forever()
    
rooms = ["E209", "E208", "E103"]

# List of rooms to query
for room in rooms:
    topic = f"AM107/by-room/{room}/data"
    get_mqtt_payload(topic)
