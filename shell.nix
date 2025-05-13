

let
  pkgs = import <nixpkgs> {};
  phpWithExtensions = pkgs.php.buildEnv {
    extensions = ({ enabled, all }: with all; [
      curl
      mbstring
      pdo
      pdo_mysql
      gd
    ]);
    extraConfig = ''
      memory_limit = 1G
      post_max_size = 20M
    '';
  };
in
pkgs.mkShell {
  buildInputs = [
    phpWithExtensions
    pkgs.phpPackages.composer
  ];
}

