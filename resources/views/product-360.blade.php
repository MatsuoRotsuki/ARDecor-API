<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Three.js 3D Model Viewer</title>
    <style>
        body {
            margin: 0;
        }

        canvas {
            display: block;
        }
    </style>
</head>

<body>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-storage.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128/examples/js/controls/OrbitControls.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128/examples/js/loaders/GLTFLoader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128/examples/js/loaders/DRACOLoader.js"></script>
    <script>
        // Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyBfHureQdoE0A3EkI4C9NCfdsoBA4LkYUs",
            authDomain: "ar-decor-app.firebaseapp.com",
            databaseURL: "https://ar-decor-app-default-rtdb.firebaseio.com",
            projectId: "ar-decor-app",
            storageBucket: "ar-decor-app.appspot.com",
            messagingSenderId: "508636360954",
            appId: "1:508636360954:web:df455e7479c4c05119d943",
            measurementId: "G-SH3PV4QKXL"
        };

        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        const storage = firebase.storage();

        // Get the model path from URL parameters
        const urlParams = new URLSearchParams(window.location.search);
        const modelPath = urlParams.get('model_path');

        if (!modelPath) {
            console.error("Model path is not provided in the URL parameters.");
        } else {
            // Set up the scene, camera, and renderer
            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
            const renderer = new THREE.WebGLRenderer();
            renderer.setSize(window.innerWidth, window.innerHeight);
            document.body.appendChild(renderer.domElement);

            // Set up OrbitControls for 360-degree view
            const controls = new THREE.OrbitControls(camera, renderer.domElement);

            // Set up Draco Loader
            const dracoLoader = new THREE.DRACOLoader();
            dracoLoader.setDecoderPath('https://cdn.jsdelivr.net/npm/three@0.128/examples/js/libs/draco/');

            // Fetch the GLB file from Firebase Storage
            storage.ref(modelPath).getDownloadURL().then((url) => {
                console.log("Download URL:", url);
                return fetch(url);
            }).then(response => {
                console.log('Fetch response:', response);
                if (!response.ok) {
                    throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.arrayBuffer();
            }).then(data => {
                const gltfLoader = new THREE.GLTFLoader();
                gltfLoader.setDRACOLoader(dracoLoader);
                const blob = new Blob([data], {
                    type: 'model/gltf-binary'
                });
                const blobUrl = URL.createObjectURL(blob);

                gltfLoader.load(blobUrl, (gltf) => {
                    const model = gltf.scene;
                    scene.add(model);
                    animate();
                }, undefined, (error) => {
                    console.error('Error loading GLTF model:', error);
                });
            }).catch((error) => {
                console.error("Error fetching or processing the file:", error);
            });

            // Set up lighting
            const light = new THREE.DirectionalLight(0xffffff, 1);
            light.position.set(1, 1, 1).normalize();
            scene.add(light);

            camera.position.z = 5;

            // Render loop
            function animate() {
                requestAnimationFrame(animate);
                controls.update();
                renderer.render(scene, camera);
            }

            // Handle window resize
            window.addEventListener('resize', () => {
                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(window.innerWidth, window.innerHeight);
            });

            animate();
        }
    </script>
</body>

</html>
