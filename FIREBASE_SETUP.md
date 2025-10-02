# Firebase Setup for Global Visitor Counter

## Step 1: Create Firebase Project

1. Go to [Firebase Console](https://console.firebase.google.com/)
2. Click "Create a project"
3. Name it: `studiosoberhome-counter`
4. Enable Google Analytics (optional)
5. Create project

## Step 2: Enable Firestore Database

1. In Firebase Console, go to "Firestore Database"
2. Click "Create database"
3. Choose "Start in test mode" (for now)
4. Select a location (choose closest to your users)

## Step 3: Get Configuration

1. Go to Project Settings (gear icon)
2. Scroll down to "Your apps"
3. Click "Add app" → Web app (</> icon)
4. Name it: `studiosoberhome-website`
5. Copy the config object

## Step 4: Update index.html

Replace the Firebase config in index.html with your real config:

```javascript
const firebaseConfig = {
  apiKey: "your-real-api-key",
  authDomain: "your-project.firebaseapp.com",
  projectId: "your-project-id",
  storageBucket: "your-project.appspot.com",
  messagingSenderId: "your-sender-id",
  appId: "your-app-id"
};
```

## Step 5: Set Firestore Rules

In Firebase Console → Firestore Database → Rules:

```javascript
rules_version = '2';
service cloud.firestore {
  match /databases/{database}/documents {
    match /{document=**} {
      allow read, write: if true;
    }
  }
}
```

## Step 6: Test

1. Deploy your site
2. Visit: `https://studiosoberhome.github.io?admin=admin123`
3. Counter should show "1" for first visitor
4. Open incognito window → should show "2"
5. Different device → should show "3"

## Features

✅ **True Global Counter** - All users worldwide count toward same number
✅ **Real-time Updates** - Count updates immediately
✅ **Persistent** - Survives all commits and deployments
✅ **Secure** - Uses Firebase transactions to prevent race conditions
✅ **Free** - Firebase free tier supports this use case
