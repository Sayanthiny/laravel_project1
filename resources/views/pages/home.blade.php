<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, Apptimus tech!</title>
  </head>
  <body>
  
  <!--nav bar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="home">HOME <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="contact">CONTACT</a>
      <a class="nav-item nav-link" href="aboutus">ABOUT</a>
      <a class="nav-item nav-link" href="team">TEAMS</a>
      
    </div>
  </div>
</nav>
<div class="content container pt-3">
  <!-- jumbotron-->
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Welcome to {{$name}}</h1>
    <p class="lead">{{$tag}} </p>
    <p class="lead1">this is home page </p>
    
    <!-- time based saying -->

      @if ($hour >= 20)
        <p class="lead"><div class="alert alert-danger" role="alert">
        Good Night
        </div> </p>
      @elseif ($hour > 17) {
        <p class="lead"><div class="alert alert-dark" role="alert">
        Good Evening
        </div> </p>
      @elseif ($hour > 11) {
        <p class="lead"><div class="alert alert-info" role="alert">
        Good Afternoon
        </div> </p> 
      @elseif ($hour < 12) {
        <p class="lead"><div class="alert alert-primary" role="alert">
        Good Morning 
        </div></p>
      @endif


  </div>
</div>

<!--card view-->
    <div class="card-deck">
  <div class="card">
    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTEhIWFRUWGBUVFRYYGBUXFxgVFRcYFxUXFxUYHSggGBolHhcXITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGhAQGi0lHyUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS8tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAKgBLAMBIgACEQEDEQH/xAAcAAAABwEBAAAAAAAAAAAAAAAAAgMEBQYHAQj/xABGEAACAQIEAwUEBwcDAgQHAAABAhEAAwQSITEFQVEGEyJhcTKBkaEHFEJScrHBI2KCkqLR4TND8FOyJGNz8RUWJYOjwtL/xAAaAQADAQEBAQAAAAAAAAAAAAABAgMABAUG/8QAKxEAAgIBBAIABAYDAAAAAAAAAAECEQMEEiExE0FRYdHwFCIycZGhBYHB/9oADAMBAAIRAxEAPwCtilBSQpUV1EQymlBSS0otEAnjcatpMzH0HMnoKqGNxrXWLNHkOQHQUvxjG95cP3V0X3bn3/2qNYA7b1GUrKRVB21E0mmtC3c1+Rrg0akGOAwaNeGldupM+VFBlaxg1jVaTZyDXcI1K3rdYwFxB5ijZppMLRxWACpfsdi+6x2Hc7d4qn0bSomhmIIYbggj1Goop0Y9G9oMQLVoMNw+n9Q/WqVxMd7ZW67AHvIWdPsk/kpqQ7R8S77BYe8p0YKx9cuvzqJxtwNYs21MZAbr8pzKyBZ/CzH58oPU3bIpFZ4tjrgEPbCqZB1MgjQKYGgHzqJwOENxwgWWJIA8/wDn5U8xF9lPd3TK6AE9Bop9I0qa7D2F+u251Dbevs/89ak+WP0XBOFjA2Et2/8AVeS7Ded4HkDUvwbAd2puOS15gZY8hEwOm4o/E7XeYu2v4vllNd4pjBbtYu8dkBC+oH91qypEzCO02J7zFXm6uw+Bj9Kiga7deSSdzr8a5XIy4qj11sQo3PwpGgVHMUDC+GxJLDKNOZPSnly7NMrbACjq1EwuHik7NyTJ2pDEPp61wGBFYw7uYonQbU4sAKM1w6chzPpTC0QNTTe9fJMnfl5CtZix2O072WBsnIRtEfOd61/spxoYvDLcMZx4bgG2YcwOhEGvP1tFGrn3c6vP0ccet2cQLcsEuwhnbN9g+WunvqmOdMSceDYBQrgrpNdRE5NDNXKEVjGOLSgNJrR6gVDCkOK38lpiNz4R6tp/el1qI7R3oyL6sfyH60JOkZdkCWojr0pViDSZXoagUESZ9fzozGYPuNBtd6CdD/7/AOawQynxeootoeE0S40QehpwwrGGqaU6GopvcFL4fnWMGrlCaArAO12uBaOEomLZw3jP/wBNayTqlwKvo5EfnU/jrC/V0KMCcqqxGxK7MDuCNR6Eg71nC3CqlYkMVJ/hJ/vVtFxu7BRs0gHoducEyR1mfMjSqwkI0QuIYjwsJHLnH4T/AMFSvY/FZMRhyToL1vXoCwBqPv3ySdB76Lg2lxyk7ih7Cbmq/wDiHufcDf1AR+VUz6R+Id3w5UB1xF0n+FdT+Xzqy2cX/wCF7w7u2p6hAZ+dZn9K2MPeYax/0rCM347up+QHxqs3SEiuSietcFcNGiuUsAUKFFcwKxjmfWBypwq044Lwm5dMIPxMdFUeZ/Tc1aX7L2gkd42f72mSfwRMe/8AtTKLYGyj3D4gKOTrXL9llusrCGUkEdCP0864DzpQnbrTpRNttT+VFXXXr+VKrb9wrGCoo3OpqV4cdRCxHOo4XVXYZj8qXtXWbcwOg0ooB6G4Xiu9s27n3kVj6ka/OadVX+wV7NgbX7uZP5WMfKKsBrtTtHOzldii0YUQGOTRqIKNUCoYVAcbuTdI6AD9f1qfFVrii/tX1gz+gpZ9BiM2pNhShBohqQ4ky+dJsYpZhSbfGgELfEiRVi4JwLvrS3WdlDSEVLZvXXylVdgmZYQM6rM6kxFVy3zHI/nVg7M8e7lMrd4MhcI9q4LbqtzKzoZUhkJUGNIM7zoUAjuKYMWypVxcR1z23AIDLJGqnVWBBBGvqQQaRw1TPHeJv3mS2Bbt2xktoMreEktnZiNWbNJ0A1AjSmmGx9zqp/gt/wD81jDAqZq3DseLYX61ireHdv8Abym4yzyuHMqqfIFoggwdKZ8C4lkxNi5cCZEu2mb9nb0VXBJ0WdN/dV74VxI4bvLd+0112vvdDFnyy1o2VKgWXDAodDJmFIEblIDZQeK8EawRLK6NOS4hJRgIncAgiRIIB1HIglktirviMG2HwgXMQ126r21O4tItwM2o5l0EwJIP3TUbaF4/7j/zEflRoFkB/wDD3YaIx9FJq5dmeBrcVTdDpsDIyyWYIBJHVgZ1gA77VI4DsjfuANcuFAeTFi0fh/QkVY+D9mrVkR3jNvmkCCNDBGvMD31WONiOaKhxns2Rm7oP4coZSRcHiWQVYAaaQRGnXpWGwhzbQynUbc/lW1NwZXUBWyjWAAIDfe6kwY+PU1D8c7KXdHtgXBBzKQCdvshtfLQztWcKMpDbCqWw+HscygY//dAuH/u+VZV2zxn1jGX7o1UuQn4E8Cf0qK2bCKLNoO6hbp7uysiVQsLalirHlm2J+yfdT+NcML3kwt3ubveg93etJbV7T5mUBjbY5l0QkHSG01EhZ88DR+JleSuVMtgbcT3vwtsfzIrlvh9sn27hjUnIiqB1ZmuQB5mpUPZHYXCPcYJbRndtAqgsx56AeUn3VaOBfR9i7t0d9Za2OQMCQIks4kINR1Y8hzq59gOy+RDcIuW1uNa8bqA72lJZlVCJt22bICzakDQLAatEt4K0gUWVFtFkkKNNZ36kkjXffzqkYfElPJXRD8I7KWLNru8oaQQTEATvkHI/vGSetZ7x7Cvh7rWn5aq3JkOzfLXoQa17NVV+kXsv9fwpVDF63L2jyJ5228mj3EA1aUOOCEMvPJkHGTautCsO/Vdh9u2Bmj8QGo6r6Cq3d1MD30wzPbfmjo3SGVlPTkQRU3cKui3VAUOWDKNhcWC0fukMrDpJHKuW7Ozoa+lDuyd6OABzruYdaBji26XtUkD019P7UZLmu1Exsf0YXCcIw6XWHxVDVumqR9FF8HD3UnxC5mI/dZVAPxU1d4rrh+lEJdgrs1yuzTimNijLRFqR4ZgTcYKCATMSYGlQRQaqk1X+K2ouv7vyFapguzdse25bqFED+Zv7VKYbheGttnSwmf77DO20aFpy+6KMoWjKVGP8M7NYrEa2bDsv3oyp/O0L86T7Q9nb+EZVvBfEJUqcymNxPUSJ9RW04ri6L7b5m6Lr8+Xvqn9sbrYq3kCAZZe3uWzqJiejLmEdctO9Hk8bnXCIfjsPkWPcrZlZoj0tdFN3rjOwQZulOMK0z5x8djTa4Kc8O1PxrBJXGJItt95AD6pKfkq/GiWbUU7tJNn8D/K4P7p86NatU1CidqzqKtmF4viLKrZt3WCoIIOVgHOrBcwOUDbSNiedRvD7GWbh+zovm52+G/uHWn+Bw4ALNoqgsT5DemSA2O7rm7BuEvfaQknxXIEkEnaBz6adBTjgOEYuLrXVFpQlzvR7JJZl7u3m0Ugrqxk+IRBOlT41xdkEqIuXVBMkylndEWCMs6MesjpTLifG7uMsKjEDuQCbayqsF/3YnVtTO/URrFU1Ei25GyDjKOmdHDJJGYezI0ME7+oo+FxYZMyMGDE6qQRCmDqNN9P4az7hnY+xc4QcZduXTdIudys+BHViLaZSstnMEtoIadNzU24tiLTMuGvOttYQZCIhRBbLGhJkzHOn8ouw9BcPvmDPKD+n609xHH8NYyjEYi1ZLar3jok6wYzETVA+i3jmIxNo98oZUJt97mGcnKG8aQJ3XxD4bmrpisctq09x1JVFZiIzGADMDnoKMlujaNF7WP8Aj/C0xFsc4IaQ2XT7wcTEAkz/AIIzniKCyz27aXFvEFQ9182XNowQbKxGzeY8iL9wvj1u5g1xNzw22srdYEE5VKZ2ECSYE6Cab8csWMYq5CGcpnRlBKlSJGZgIAM6azr5VCvTK7jG7ONtYJ+8ujxgHu7YALE7HMp2SMwk9edW76OcJhr6d8bSs6PmVYm3aaTlABJlwIIdhMP4Y2FN4r2TZ7927indB3pFlraG7exM+IW1tDXMggFunIwSLV2Ku4JLQt4NXNxin1gXQyXRbf7bEAhoHiUKNjyBdqSNRbbHyybx0aeTHrzNFZidyTSVp10AM6SNZkaazz3GvmOtKV2KuzznYKFM+K8Vs4ZO8vuEWco3LMx2VFGrsegE1kfa/t++IzWlGS1qDaB1blF+4p1/9JDH3mPs0spqI8Mbn0M/pR4fhL+L77D3ImRiWAlGuLAHda/tLkaNHhBAlgSaqt+4oVbdtcqLMCZYlozMx5sYG2gAA8yQ4hnALGTEDYAAbKANFA5AaUQ1xt27O+KpUJxQyzR64SelAYSa0aNbvOvP46/nThDIoyL5VgGqfRRhpsPeb2nfIOQyoAdusk/AVeqq30dkDA2wOTXAfXOT+RFWbNXZD9KIS7DEUIrhNFmnFMdQ0rindUW9bPisMLkdVHtT5Rr6A0ipp3hrselQKl2w/FVe2lxNQ6hh+oPmDI91N8TfdvtQOg0FVvs1f7pnwp9me8sH90+0vu/Qmp+vZ0Eccobq/Muz5v8AyuTNHJscvyvobxXGnkYIIKnowMqfcQDS7Cksh9a9TiSpnjJuLtGe9pcIEvNlXKj+NF+6GJzJ/CwZf4RUG9aD2u4YxQypD2zngggxAFwQfIK3ojdaoN22a+R1GLxZHH7o+50mfzYlP+f39jR6c4D2h50RLJJgCSdABuSdgBzNPhgblu4FuW3tsCJV1ZGE7SrAEVA6Sa4ZbkOv3kJHqkOPkp+NOsLhiSABJOgHnTzs3gwboLzlQM7RuQqklR67T0Jq5twZFKZLdsFlYq1tmdki2G8as5E6sORlZ8qokI2Vd7OoQbLp6sfaPx09AKV4rZPd27I/3W8X4Egt+fyqcwfDVBHgY/i0/pH96ddpMI1o2yQEhY2giQ3Pfpz5VWMSU3wVTA9jhirl69dchA2WBAMiREtooACkHWZ5RUTg+EWbXE8oIZbZuvbtyzFmt2HuKrNGUjMNpMgQdzV47O4WMO1wlibj+KZP+moQa85gn1J6VGcZwALm5albmWAQYhlOa208irQQRTyhaJqVMj8bibrYYY1MXd+tG3aJsKzkSbj94CndQALZtQM06MCTzr/azgL2Loui2ER1tN4Yypce2rOoA9gEyQNAJgbVJ4jit5Q7DDYMYiwpz3Rb/aPbABF1Lc5NNz4SPIRFTvZvjq420y4hQXIy3SI8YbUOV8/dBBqcY80x5S44InsT2n+rTbuD9lcOZmUQ6tAGeR7WgEjf8jfcHjUa5dtrf+sWmRbpzlGZe92TKAItldRI+1vUd2d+jzD4dc+MJvu7HubIzDwH2M4UZi5EEjQCannODtsWbC90zAoXXMDl5DcjpodqeMmBxK52w4rYwmCXCq72lZMihGVrmRpkBXklcuhJj2hBmrV2ExCHAYbuy2Tu1KhjLAGTB8xtVF472cW7xAX72W5hns+AnbMCAFyzIIDTHzq78LxYChUGVQABtsBAGmw8hTJWwXQ07WcPzPbdWtretO16xnML3jLEMYIAJHPr5Qc24jxM4Z7+Kd7LYzuhhxZssjrbVYtZ7mQBQFGVQvtSF5Sa0ztKM3dfij5isy7W8F7y79YtLmbVL1sQDctnQldRLgcucKeVQywstCVrks/ZDtfw9RZXPcN57Vxrj3CXMpmdlJGg0BIAAAiNfDVi7V9sEwqxbAuXGUMrSRZVW9lnuAazyRZYxyGtYnguyzWbme+xXIwKKph2gyrFh/pjY/e9N6luPcQS5ZUSe8zE6EkFSNQwPMECOfrQU5r4JUCWKMnZE9pO0t7EXCzXGJMjOdDlO621Bi0n7q6n7TNUNbEL6wKLcWTS0agdNandlUqFAK6FrlcNAwpk8x8aELzakstDuhWMLIVH2qcLdSo82YpylqiY2fsDZK4K2T9stcHoTC/JQffVimmnD7YS1bRfZREVY2hVABpeuxKkc77FJrk0WaKTRMZCKOjUkho61EoLmTDr7ds5l8x9oehq34VluIrqdGGYfqKqFi5BqQ7P3e7uthz7J/a2vKfbT3bx611aTN48nyfH0PP/AMjp/Nhddx5X/Sy90In/AJ51I8B4a9y8ndQChW4SxMABh069KhLrchVu+j5pN2N5tT+HLc/WK9bVyljwykvv0fP6HHHLqIwf3XJJcS7NG9ixduKj2joykkGMmWCOe5/Ksu4x9HrWLONusM31d7XdFXEZDD3GdWEkBGTnuG3rc20uTyKxvpIM7dYn4VSeM9qBasY26UFzK7ZFJylkttZTKSAdM109faAgivnZSnkim+opI+shHHik4ruTb/37Mo7M8JujF2+5tF7lp1uC2RBLWWGZWn2BmEEnatc7VdjbmLx1nEEWjaRbSurFpYLcdnBhdRBga8zUD9HPEuGfWi+HuXxevgotm8pZlzN3lyLwkMPDPiM+HetTuXAu/n8gT+QNSbOhIyvjXAzYxZCKi52LW0T2Qjkqq5SOYmViNTyq1W+DkXjaCrlhGYiQcp3EyY1BECJFVrtFiwnFHdRJQW7knUSLS5YH8vvq2YPH5sa4jwnIQdvZtHXzBzn5VRN0JSsfYfhAW4W9lZ8Kgn191RPbnCl1MAeyNwDqZHMelWA4v9qF3BAI94qP7YK/c5rYlhyifCf8xRg3vVgmltdEavDu7tLbhTlEHSASTLGBtqSaicbw8EGE1gxqd/Wat2E8aKxBGZQYYQdRqCOtN7mFJJBSANjoQd/hy+NWjNdMi4GLrw25iLjuTcR7I7soFE+ItmXI6BGkfvQRHlUPwbHW8LiFVBcWGyul1BrqJU5X0MjnNbbxDApbDO5VAYzMxgaaCayTtfbDMXFsG8DBJUd2QvssoDan8U8qzXFoHvk0xuKhOJZrr5UAYq0FhBJgQOqldfSl+23GsO+FZUcs05gBauHN1ExpoSZ8qz/s32pt3Lfd49Lma0oXv7UzlmFV1SCegKwfhNSCcW4PbbOcTfvkEQoF4gE8/Gcnxn41FrksnwPFW4OHo9w+J7iQI9kC2zOfL2lB8xFO+F3dAZ0G/wCtZp2m7bX7uMV1HdW7BKJZUyAhPjlj7TNElvSrXh+0tu9bRFVh3hAZiFQhJgkjUEHbbaarjkSmuS02sX36KcsQ0gfuliEPlIWqbxAEE1qWCw3gK227oAgLEA5R4AW2LGFnWd46Cqf2p4a3iZoLBwhYQA2Zc0nzEQTzkc5JWTspFUiicTYvbDc08DfhPsH81/lqs4gb1eW4JcGIOHgEkFWg6ZSA2aTG2h9RVSxuDZWKkagkEeYMVKSKIhhb51wIc08qfPZgU44pwm5Yfu7qgNAaAQRB8x6Ee6koayNrk+VTmI7PumFTFFkKOcsAnMNSBM6bgiOX5Q7FRuwrNUYKscx86FyAfI8/08qd2MC7AlLTsApcnKYyrGYzziR8aI2Fbu+8yE2ycmaDlzROWesVjDV8sTqPTUf4pSxilEbn3UhcssoDAHKSQGg7jcT11pbh1prlxLaqC1xlVTtqxiTHIb+6sY2XsIznBpnJIlskiD3c+H3bx5RVhBpng7ItoltT4UVUHooAH5U4zV2JUjnfYoTRZouaug0TGQIaUBpJTRwagUDq1NL+OKXgQfGGVrfqAIHow094pe48Ak8tar9y6c+c6ufZHSlkwpGn2ryuq3E9lwGHlO6+oMiprssxTFWiGEZoYTyaV1671TeymIJU2miSDcSNg4/1UHr7QFWbAXcrCZykiY9r1B619Dgy+fTte6pnyerwfhdUpLq7X0+/ReeJXSb+FuMYAGJVuu2X8wKo15SUNu68JdzK8j7Nwobhk7Hwgz1AqZ7Q8T7xLbKcrftfBvGZpBzfGYqq4fhzs83m9qWdpmLS+IwN4ia4dyxYdrXPVfDl/U9CMZZ9QpJ/lTu/jxH6El9G3ZlLOKt3vrAuMuZSvdsFHeKwBV2Op8xyPmDWr4gd4jLt7STzEgrI6aGqVwGEKMVIZnVso5ZiAq/wrlX+Grg7x3xMwNQPMDMY+IHury5xpo92LKpjuy4e7cum6B3hVQI2VBA1nXRFqRwHDBbLv3mY5Ss8zKjUH3x7qeXEgog3AJ5D2QF5/ipMEwSVBliJhuRC7xHKm5FHlq2O8XyC/IRHy+dObt6SF5kGdY0EbH3/ACpvotwbARP5j9aNiLIYqdQV2IMHn/f50r5oKI7E2+6GXOczFigLSDl2AHIleemvrBkUuMIDD9TSeISRrqRqPIjYxzI+FF4UlzVXIYDVW5kcvX/m9N6ti+xpxDB59W/9qpfaPgqESQa0q7Zmo3GcJzA6jqJ6jaarDIqpiTg/RiHEkW1+yAkH/UAG5I0BO5yjXXmTVV4kpVisQPLmPWth4x2GuE5gQ0nWN/nFR2J+j9yoYZQygyX1Om2WJAPmdutZq+hFaMy+pFlVysusIy82EfsnaNQCojqco6zV27IcA765FwgWkIa/cJAUx7NpTtrGsbAeko4/svctYe5ehu7SBdcaBrbNBZJ1fIxD5toX4Vjs8llcWtvGW1uIWNs5i0Kx0VxB1EwNdIaeVJdOh9trcb7w7jODzvlxFpmBGYJcV4LGBKrMHSo/i3FrLYlLeRrgK58otllJLrbJJPPxKfQUOBcLsWCBZsW7eZhmyookKCdTGtSONxwDqIIysJMiI0n/AJ5Vbwy3UT8622MDhy1/MmGIYqQWaFJGkQY16ddqjf8A5MP11bz3Et/aW2iknMBpmcEACJEAHYa1YVxsYoDXQ5fISuvz191dwPEgDDIZzsdZEFvDtkPLzrSxS/qwrKv7opHDewYTGF3vqbQLBLfdh5JGWC5OsGTtMgVLdofo/wAPfuLcc3WaMpAaAQNjEaRPIjepi8O7OYe0zlx0CjQH3/OJpxxe+2YKsCIM6yDr08iKaOFWqJyzOnbItOyODs4XuTZDKWDZbjNcGeZ0DkgbHbz60pwbhlhHAt2baaGMqINY0mBUrxUxbUHy+IH+aYYJ/wBoPfr/AAmqY4LY3+5OcnvS/Yd4XBW7iurgXFYZCDMEEeIR013qrca+jux9Ve1h80Fmu21Lsct1lKplkwV2GU/GdasXCsURn6BZop4k3c/vBgNvMsD8hSzwylL+B8eVRiZ/j+DWE4etq6GVEYtmYhWDEsM+XYkzoh18QGhEiq/R3gw2Ns88veMPL9k+/pWucV4daxeE7q8sgMCCJDCCYKn3jqPKsu412KxWEbvcMzXFXUMkreT1Vd/VeuwFc+TDKLtLhHRDNGSpvlmo3LRrk1nvZ/6SnWExid6u3eoALg5eJNFf3ZT61f8Ah+Ms4lO8w9xbi843U9GU6qfIimjNS6C4tBwaFFZSKLNMAyRTSgNJA0eagVEeJN4QOup9BUXhVlix9B+tSnEElJ6fkaY2RAFTl2FdEtw26wYFdwQy/iHL3jT4VcXx65VddcwlR06z6GqNYfpU7hrsrl9WHr9sfr8K6tJneOX7nDr9Ms2P5rn6okExTtAnc5mPOOnlU1gbJhQd7pzN/wClbI0/ieB6K1RXCsPmIGxYyfIVY8GslnIiSFUHcW7eiD36t/FTZpbpB0mPZjTfv7RO8DQG7mMQgLmeuy//ALH+GrD3gYRcB8cCNjmHjj3R8qr+DtgWBKgteuACQJ7tT4gCeqrcI/FTy1iCbo1Ayhm0I+0YExz31/drnau2dadD0ODdYHQqq6c/ETP/AGjnRc37OV0ltDz8V08/fSKYlcztImQCSR9lRsZOmppu15TZQTEi1zk6sp1I1nXejtBY+xN0qwmdm38ivl509L1AYhQGGXXRh7ZbpyOvKnN/iDBVIiSsmetHaCyQe5RbFzLAJ8v7fpVfu8UueXwpSzjLjKHJUKJBLaTHTcnp7qNI1ssv1jrRmuiozvwRmDA+m08zSH1mh40w7iUdxUfjShHiGaNQDqJ9Nj76QfEU5wmDzeJxA5Dn7+lNSiDsaMO9DW3XMjqUdeRVhDA+oNefu0fC2s3Lll9Xw7dw5P2kibFw/iQgfy9a9NqgGgAHpVA+krhFlLi45rfeM4t4U2iA1tme4O7uOp0bLtB0MLO1SyOx4qhL6OuN/WMNbLmblpmR+rZVGR/eN/MGpzEpmuZhoZkRr57GqdhsTcwmMs2GGHdb73bamxbtW2RVu5EZu6YghlyPB2BI31Fye7p4djz5n/FdumnuXz6OHUQ2v5HSQr59C0yTyHoOdJW+IssAEwNtZj0naurSRsy0naulRi/1HPufo6cVmMmZPPc1IYxM1wxqTB9OVMWKoJJCjqSAPiaYYztPg0JzYm3PRWzn4JNJNxTvoMU2urLHxBZB1nxA/wBMfpUfYUhwY2n8qreM+kLCj2RcuT0UKNv3yD8qib/0jH/bw4Hm7k/0gD86is0Ixqy7xTk7ov2HTLm0mVK/GK4Q0RH/ACKzodq8fe/01gf+XaLfM5qbYnGYo/62IyeT3kT/APGGn+mlepXdDLTS9s0fE3wiHO6oOrEDn1Y1CYztjgbXtYlSf3A1z/sBFUK5irC6tfDH/wAtHf5tkHzpfgeKtYnEJYRLpBlndiihUAknIASdYEZhqwpHqpdJIdaVe2E7Wcb4diZZLN0Xf+qgRAT++CfH6xPnVTwGKuW7gey7JcGzITm9NNx5HStjTsxgh7VsOfMA/Jpj3U/t4bDoISygHSJHwOlRlCUnbLRaiqRXOyXajFYhhaxOHJ0P7cLkiBP7RDprESvMjTnVmag2I0gAAdBAHwFIl6ok0uQMygGjzSQNGmpFBYiQRyINRMwY6aVJA03xmHnxDfn5/wCaWSChO3cqSwWI5T5j1/zt76glY0oLh60iYaLzwbiluy7PeV2lYATKDvM+Ll/byqXXtpg/+lifjZ/vWYJjCDE1on0dcNtNae/eRbhzFVDAMAqgSYOkknfy9aPkoyhZI2e3GGUKEGIAScg/ZeGd41pRO29qSQbwJABOW3qBMD2vM/Gpq9hcOqZzh7IET/pW+e3KqdxbidoexbtxuCEQbbjbahLOkUjp3Ilh2xt5SoNwAySIGpYyftedA9r7cAFmgRAjQZfZ58oFRXY7i9trzh0t5SNJVTqOkjSrLexNqdLafyL/AGoxzJqwS07Tohrvay2XzszExEnM0DyUsAPlS1n6QsOiBDbvPE6k2xMkn2ZMDXapTv7f3E/lX+1dGKT7iR+Ff7U3kF8TILEfSPg+eGu+57Y/WpPDdsbDol1cNeuWimQZQHKOIBtsqqSLn2p5hgedWLgyZzmKgKNtAJNT3fRtpTW2K40QfCLJa297umtBzmt2mkMF31UqCh8ukegPgk7xoAgDcmdPL1qRvXqR4Owh/wAZplKuAbfZIWcOieyonrufjSoakHaipdpWEcZ6YcawCYmy9q4uYEaCSviUhk8Q28QGtOmNEmtSMeeL/aNbSumHsXLVw5kZ7t9rzW91cW1ygK+pGbWOQmCJDhH0hPZw9uybPeMgyhy5UFR7EjKSSBA35Vc+0n0Z2L19r6Xza7xi7pkLjMdWKwwiTyqFxHYzDYeGYF1EZmcAD3Bsx+FIpyx8ph8KycNEDf8ApExjmLa2k6BULN/UxB+FNbnEOKXh4rl8A+YsD4+EVfOFcQ4fBFq0qsBOVixnzAJg/CoDtLxRW0SFHOAAAB6Uss7ftseOlS9JFUv8NMg38RbU7+Jnutpv7AafjSfeYRd7t65+C2tsfF2J/pqMx2Mz3JB0Gg+Ov50zmlsDRPHjNlfYwoPQ3brt/SmQUVe0t7ZBatdDbtWwfTMwLfOoSuUdzBQ/xXFr9z/UvXH8mdiPhMUQXNjTY0pZOhoWYOMzHKoJJIAA1JJ0AA61qHZDgf1W2S+t64BnPJQNkB8uZ5n0FQPYDhG+JcdVtT8Gf9B76u+ar44+yc36Fs9DPSU0M1VEFc1DNSWauzWMZcDR5pMUYGolA60cGk5o4NYw1xmHnxL7x+tMc1TQNMMZhN2XbmP1FJKPsZMiVua1e+wnaBLavYutlDGUY7SRBUnlsD8aoBGtOLNyptWqHTp2bN2jxrNYUKfI1QeL2WW2hJ3kjnzj9Kh1x1wLlFxwv3czR8Jq9YLs82IweHZfufqajODu2dePMq2lW4SMmoJB61Z8HxAc2Jo9vsVcA1n40tZ7IPO595EfKsrC5IPZxRcwon8veancDhtifETsOQ9KiBw67a3KwOgqb4VbuGHIhQND19BTonL5FpwYCqFG/OnBNRuCvzt7+vvpd7sbmrpnM0DFPApLs5ezC5+M/kKj+IY0QeYpXs2YsZp1Znb3SQPkBWUrY2z8pOXXikBfB02P/NqjFx2a53c66mZ6U04vxAWvOs5ezLG+izAyPOgX61WuFdpUfwkkN03J9Kc4rjqp7Wnv/wAVt6B43ZLXHHlVX7S4I3V0bQa1zE9pLUSDPqar3EOPZjpp8/nUpyvgtCLTsrHGsIES4xkEKY5azvpVLxF9iIZifUk/nV549is1i4Jnwk/DX9Kzxmk1o9CZHydWuk0FWuGmJnRXRXQKdYXhd65/p2nbziF/mOnzrGGwFSvZvhLYi7EEINbjdB0B6mpLh3Y66SDdZUXmAczenQfOrpgcKllAltcqj5nmSeZ86pHG32I5fAeWVCgKogAAADkBtR89IZqGaugmOc1cDUgGoZ6xhfPQL0gWoZqxjOAaNNChURw6mjTQoVjBqMDQoUTBPqls7ovwpLEcNthWYAiATodNB50KFBpGsi1OkVtPZHFBcJh1Go7pI9YE/OaFCuTL6OjH7J18UoE/GmNzjKBwCwUa6nb0oUKRSZVRRVe0XF/FFtwxPJddOp8qtNriYewGECZEcxGlcoU8e2NPpFew+Oud+q5oBYZgD9np8vlUpj+OZHECRzoUK10HiXYlw7tFbdwWSI58pp5iOOLnCgyDPOhQrKTDKEVyQHEsYyuHtkhgZnX9d6F3i4vLJUZuY00PvoUKZsldkRhMd3F0XIzRof8AFPOK8TS+Mylieh/WhQpbCmyBuXGFNXuN8a5QoWATx14i25/dI+On61WFEUKFUj0Sn2dFErtCmED2jqPUfnWt5qFCq4vZOZ3NQz0KFWEO566GrtCsY5mroahQrGOZq7noUKxj/9k=" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Mobile Application</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT5L7SPopUUTEL3xSeRFwAzUXuvlVCkU5KvgLYKXCYKJM-8VVem&usqp=CAU" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Web Application</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT94X6yXl4uR1ko6aFd82IhGJ4x0SSOPkU7G2hcj8inckto4h1L&usqp=CAU" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Another Application</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
<!--card view end-->
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>