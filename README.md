# new_bootstrap_gridelements
> TYPO3 Extension for adding Bootstrap 4 Grid to GridElements

## Features
- Elements for 2, 3, 4 Columns
- English and German Translation
- TYPO3 8 , 9 & 10
- Documentantion

## Usage
### Installation

#### Installation as extension from TYPO3 Extension Repository (TER) (recomened)
Download and install the extension with the extension manager module.

#### Manual Installation (FTP required)

- Download extension via GitHub or [TYPO3-Ter](https://extensions.typo3.org/extension/new_bootstrap_gridelements/)
- Go to your FTP and navigate to `/typo3conf/ext/` and upload the new_bootstrap_gridelements folder there

### Minimal Setup

1. Activate Extension in Extensionmanager
2. Include the static TypoScript of the extension and Gridelements
3. Gridelements must be above the new_bootstrap_gridelements extension

## Administartion corner

### Versions and support

| new_bootstrap_gridelements  | TYPO3        | PHP       | Support/Development                  |
| --------------------------- | ------------ | --------- | ------------------------------------ |
| 10.0.0                      | 9.x - 10.x   | 7.2 - 7.4 | Features, Bugfixes, Security updates |
| 9.0.0                       | 9.x - 9.x    | 7.2 - 7.4 | Features, Bugfixes, Security updates |
| 8.x                         | 8.7.x        | 7.0 - 7.4 | Bugfixes, Security updates           |

### Changelog

Please look [here in the changelog.md](https://github.com/Thejuse/bootstrap_gridelements/blob/master/CHANGELOG.md)

### Release Management
bootstrap_gridelements uses semantic versioning which basically means for you, that

- **bugfix update**s (e.g. 1.0.0 => 1.0.1) just includes small bugfixes or security relevant stuff without breaking changes.
- **minor updates** (e.g. 1.0.0 => 1.1.0) includes new features and smaller tasks without breaking changes.
- **major updates** (e.g. 1.0.0 => 2.0.0) breaking changes wich can be refactorings, features or bugfixes.

&copy; 2019-2020 [Julian Seidl](https://www.jseidl.at/)