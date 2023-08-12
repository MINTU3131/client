<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://js.upload.io/upload-js/v2"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none
        }


        a {
            text-decoration: none
        }

        body {
            background-color: #ccc;
        }

        /*.container{
	width: 412px;
	height:720px;
	background-color:#f4f5f9;
	border-radius:0px;

}*/
        .container-fluid {
            width: 100%;
            height: 100%;
            background-color: #f4f5f9;
            border-radius: 0px;
            padding-bottom: 40px;
            position: relative;

        }

        .seller-frm label {
            font-size: 10px;
            margin-bottom: 3px;
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            color: #424242;
        }

        .seller-frm .input-group label {
            margin-bottom: 0px;
        }

        .seller-frm input {
            padding: 8px 5px;
            border-radius: 8px;
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            color: #9e9e9e;
            font-size: 11px;
        }

        .seller-frm input:focus {
            box-shadow: none;
        }


        .btn-slt {
            font-size: 13px;
            background-color: #1b434d;
            border-color: #1b434d;
            margin-top: 10px;
            padding: 3px 119px;
            border-radius: 3px;
            font-family: 'Inter';
            width: 100%;
            position: fixed;
            bottom: 0px;
            transform: translateX(-50%);
            left: 50%;
        }

        @media(max-width:2560px) and (min-width:1201px) {
            .seller-frm input {
                padding: 11px 5px;
                font-size: 12px;
            }

            .seller-frm label {
                font-size: 12px;

            }

        }


        @media(max-width:1920px) and (min-width:1200px) {
            .seller-frm input {
                padding: 11px 5px;
                font-size: 12px;
            }

            .seller-frm label {
                font-size: 12px;

            }

        }


        @media(max-width:991px) and (min-width:768px) {
            .seller-frm input {
                padding: 11px 5px;
                font-size: 12px;
            }

            .seller-frm label {
                font-size: 12px;

            }

        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="seller-frm">
            <form action="/action_page.php">
                <div class="mb-1 ">
                    <label for="email" class="form-label">Seller Store Name (As Per GST) *</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="mb-1">
                    <label for="pwd" class="form-label">Seller City *</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                </div>
                <div class="mb-1">
                    <label for="pwd" class="form-label">Seller Email ID *</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                </div>
                <div class="mb-1">
                    <label for="pwd" class="form-label">Seller Phone number *</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                </div>
                <div class="mb-1">
                    <label for="pwd" class="form-label">Seller GST No. (Should be Regular GST) *</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                </div>
                <div class="mb-1">
                    <label for="pwd" class="form-label">Seller GST Certificate (PDF)</label>
                    <input type="file" onchange="onFileSelected(event)" />
                </div>
                <div class="mb-1">
                    <label for="pwd" class="form-label">Bank Acc No. (of Seller/company mentioned in GST *</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                </div>
                <div class="mb-1">
                    <label for="pwd" class="form-label">BANK IFSC Code (of Seller/company mentioned in GST) *</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                </div>
                <div class="mb-1">
                    <label for="pwd" class="form-label">Seller Bank PassBook/ChequeBook (JPG/PDF)</label>
                    <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                </div>
                <div class="mb-1">
                    <label for="pwd" class="form-label">Onboarding Query Support (Call/Whatsapp - 9289119956)</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                </div>
                <div class="mb-1">
                    <label for="pwd" class="form-label">Comments</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                </div>
                <!-- <div class="form-check mb-3">
               <label class="form-check-label">
                 <input class="form-check-input" type="checkbox" name="remember"> Remember me
               </label>
               </div> -->
                <button type="submit" class="btn btn-primary btn-slt">Submit</button>
            </form>
        </div>
    </div>
    <script>
        // DOM Elements
        const d = document
        const h1 = d.getElementsByTagName("h1")[0]
        const uploadButton = d.getElementsByTagName("input")[0]

        // Get production API keys from Upload.io
        const upload = Upload({
            apiKey: "free"
        });

        // File input handler.
        const onFileSelected = async (event) => {
            uploadButton.remove();

            const fileToUpload = event.target.files[0]

            try {
                const {
                    fileUrl
                } = await upload.uploadFile(
                    fileToUpload, {
                        onProgress: ({
                            progress
                        }) => {
                            h1.innerHTML = `File uploading... ${progress}%`;
                        }
                    }
                );
                h1.innerHTML = `
                  File uploaded:
                  <br/>
                  <br/>
                  <a href="${fileUrl}" target="_blank">${fileUrl}</a>`;
            } catch (error) {
                h1.innerHTML = `Please try another file:<br/><br/>${error.message}`;
            }
        }
    </script>
</body>

</html>